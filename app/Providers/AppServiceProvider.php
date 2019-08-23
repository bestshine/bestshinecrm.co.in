<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // VendorRepository
        $this->app->bind('App\Repositories\Vendor\VendorInterface', 'App\Repositories\Vendor\VendorRepository'); 

        // FranchiseRepository
        $this->app->bind('App\Repositories\Franchise\FranchiseInterface', 'App\Repositories\Franchise\FranchiseRepository');

        // EmployerRepository
        $this->app->bind('App\Repositories\Employer\EmployerInterface', 'App\Repositories\Employer\EmployerRepository');

        // SchoolRepository
        $this->app->bind('App\Repositories\School\SchoolInterface', 'App\Repositories\School\SchoolRepository');

        // CustomerCareRepository
        $this->app->bind('App\Repositories\CustomerCare\CustomerCareInterface', 'App\Repositories\CustomerCare\CustomerCareRepository');
    }
}
