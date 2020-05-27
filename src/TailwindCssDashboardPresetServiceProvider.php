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