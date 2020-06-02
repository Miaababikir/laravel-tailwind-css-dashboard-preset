<?php


namespace Miaababikir\TailwindCssDashboardPreset;


use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Miaababikir\TailwindCssDashboardPreset\Presets\AlpinePreset;
use Miaababikir\TailwindCssDashboardPreset\Presets\VuePreset;

class TailwindCssDashboardPresetServiceProvider extends ServiceProvider
{

    private $layouts = ['stacked', 'sidebar'];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tailwind-dashboard', function ($command) {
            $options = explode('.', $command->option('option')[0]);

            if (in_array($options[1], $this->layouts)) {
                if ($options[0] == 'vue') {

                    VuePreset::install($options[1]);

                    $command->info('Vue Tailwind CSS auth scaffolding installed successfully.');
                }

                if ($options[0] == 'alpine') {

                    AlpinePreset::install($options[1]);

                    $command->info('Alpine Tailwind CSS auth scaffolding installed successfully.');
                }

                $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
            } else {
                $command->error('Please choose one of the available layouts [stacked, sidebar]');
            }

        });
    }
}