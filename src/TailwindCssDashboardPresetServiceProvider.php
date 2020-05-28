<?php


namespace Miaababikir\TailwindCssDashboardPreset;


use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Miaababikir\TailwindCssDashboardPreset\Presets\AlpinePreset;
use Miaababikir\TailwindCssDashboardPreset\Presets\VuePreset;

class TailwindCssDashboardPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tailwind-dashboard', function ($command) {

            if ($command->option('option')[0] == 'vue') {

                VuePreset::install();

                $command->info('Vue Tailwind CSS auth scaffolding installed successfully.');
            }

            if ($command->option('option')[0] == 'alpine') {

                AlpinePreset::install();

                $command->info('Alpine Tailwind CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}