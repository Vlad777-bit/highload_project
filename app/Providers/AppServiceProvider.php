<?php

namespace App\Providers;

use App\Modules\Order\OrderStorage;
use App\Modules\Order\OrderStorageInterface;
use App\Orm\ShardingStragegy;
use App\Orm\ShardingStragegyInterace;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ShardingStragegyInterace::class, ShardingStragegy::class);
        $this->app->bind(OrderStorageInterface::class, OrderStorage::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
