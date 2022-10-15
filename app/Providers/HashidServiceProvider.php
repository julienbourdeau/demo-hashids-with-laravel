<?php

namespace App\Providers;

use App\Models\Thing;
use Hashids\Hashids;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HashidServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('hashid', function () {
            return new Hashids('This HASHID concept is amazing!', 6);
        });
    }

    public function boot()
    {
        Route::bind('thg_hashid', function ($value) {
            return Thing::findOrFailByHashid($value);
        });
    }
}
