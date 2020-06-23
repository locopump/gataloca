<?php


namespace App\Providers;


use App\Models\Repositories\ProductosInterface;
use App\Models\Repositories\ProductosRepository;
use Carbon\Laravel\ServiceProvider;

class RepositoriesProviders extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->bind(ProductosInterface::class, ProductosRepository::class);
    }

}
