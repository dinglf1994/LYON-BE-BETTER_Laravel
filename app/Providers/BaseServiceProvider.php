<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\GraphRepository;
use App\Services\Tangle;
use App\Http\Controllers\EmployeesController;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            GraphRepository::class,
            Tangle::class
        );
        $this->app->when(EmployeesController::class)
            ->needs(GraphRepository::class)
            ->give(Tangle::class);
    }
}
