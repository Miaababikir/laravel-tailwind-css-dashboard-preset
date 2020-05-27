<?php


namespace Miaababikir\RtlTailwindCssPreset;


use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class RTLTailwindCssPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('rtltailwind', function ($command) {
            Preset::install();
            $command->info('RTL Tailwind CSS scaffolding installed successfully.');

            if ($command->option('auth')) {
                Preset::installAuth();

                $command->info('RTL Tailwind CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}