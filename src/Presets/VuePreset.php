<?php

namespace Miaababikir\TailwindCssDashboardPreset\Presets;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Finder\SplFileInfo;
use \Laravel\Ui\Presets\Preset as LaravelPreset;

class VuePreset extends LaravelPreset
{
    public static $type;

    public static function install($type)
    {
        static::$type = $type;
        static::updatePackages();
        static::updateStyles();
        static::updateJavascript();
        static::updateBootstrapping();
        static::removeNodeModules();
        static::installAuth();
    }

    public static function installAuth()
    {
        static::scaffoldController();
        static::scaffoldAuth();
        static::scaffoldViews();
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            "axios" => "^0.21",
            'resolve-url-loader' => '^2.3.1',
            'vue' => '^2.6.12',
            "laravel-mix" =>"^6.0.6",
            'vue-template-compiler' => '^2.6.12',
            "@tailwindcss/forms"=> "^0.4.0",
            "tailwindcss" => "^2.2.19"

        ], Arr::except($packages, [
            'bootstrap',
            'bootstrap-sass',
            'popper.js',
            'jquery',
        ]));
    }

    protected static function scaffoldController()
    {
        if (!is_dir($directory = app_path('Http/Controllers/Auth'))) {
            mkdir($directory, 0755, true);
        }

        $filesystem = new Filesystem;

        collect($filesystem->allFiles(base_path('vendor/laravel/ui/stubs/Auth')))
            ->each(function (SplFileInfo $file) use ($filesystem) {
                $filesystem->copy(
                    $file->getPathname(),
                    app_path('Http/Controllers/Auth/' . Str::replaceLast('.stub', '.php', $file->getFilename()))
                );
            });
    }

    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            "Auth::routes();\n\nRoute::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');\n\nRoute::view('/ui', 'ui.index');\n\n",
            FILE_APPEND
        );
    }

    protected static function scaffoldViews()
    {
        tap(new Filesystem, function ($filesystem) {
            $filesystem->copyDirectory(__DIR__ . '/../stubs/resources/vue/' . static::$type, resource_path('views'));

            collect($filesystem->allFiles(base_path('vendor/laravel/ui/stubs/migrations')))
                ->each(function (SplFileInfo $file) use ($filesystem) {
                    $filesystem->copy(
                        $file->getPathname(),
                        database_path('migrations/' . $file->getFilename())
                    );
                });
        });
    }

    protected static function updateStyles()
    {
        tap(new Filesystem, function ($filesystem) {
            $filesystem->deleteDirectory(resource_path('sass'));
            $filesystem->delete(public_path('css/app.css'));

            if (!$filesystem->isDirectory($directory = resource_path('css'))) {
                $filesystem->makeDirectory($directory, 0755, true);
            }
        });

        copy(__DIR__ . '/../stubs/resources/vue/css/app.css', resource_path('css/app.css'));
    }

    protected static function updateJavascript()
    {
        tap(new Filesystem, function ($filesystem) {
            $filesystem->deleteDirectory(resource_path('js'));
            $filesystem->delete(public_path('js/app.js'));

            if (!$filesystem->isDirectory($directory = resource_path('js'))) {
                $filesystem->copyDirectory(__DIR__ . '/../stubs/resources/vue/js', resource_path('js'));
            }
        });
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__ . '/../stubs/tailwind.config.js', base_path('tailwind.config.js'));

        copy(__DIR__ . '/../stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    protected static function compileControllerStub()
    {
        return file_get_contents(__DIR__.'/../stubs/controllers/HomeController.stub');
    }
}
