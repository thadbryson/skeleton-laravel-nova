<?php

declare(strict_types = 1);

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use TCB\Laravel\Providers\ServiceProviderTrait;

final class AppServiceProvider extends ServiceProvider
{
    use ServiceProviderTrait;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Change to prevent MySQL error with foreign keys.
        Schema::defaultStringLength(191);

        $this->parametersMany([

        ]);
    }
}
