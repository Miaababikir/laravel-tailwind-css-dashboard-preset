<?php


namespace Miaababikir\TailwindCssDashboardPreset;


use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

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
                VuePreset::installAuth();

                $command->info('Vue Tailwind CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}