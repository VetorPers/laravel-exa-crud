<?php

namespace Vv\ExaCrud;

use Illuminate\Support\ServiceProvider;

class ExaCrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);
    }

    /**
     * Register the application services.
     * 
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Appzcoder\CrudGenerator\Commands\CrudCommand',
            'Appzcoder\CrudGenerator\Commands\GenControllerCommand',
            'Appzcoder\CrudGenerator\Commands\GenViewCommand'
        );
    }
}
