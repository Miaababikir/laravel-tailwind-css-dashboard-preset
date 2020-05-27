<?php


namespace Miaababikir\RtlTailwindCssPreset;


use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class RTLTailwindCssPresetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('rtltailwind', function () {
            Preset::install();
        });
    }
}