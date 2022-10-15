<?php

namespace App\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

class HashidServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('hashid', function () {
            return new Hashids('This HASHID concept is amazing!', 6);
        });
    }
}
