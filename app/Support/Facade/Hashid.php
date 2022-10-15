<?php

namespace App\Support\Facade;

use Illuminate\Support\Facades\Facade;

class Hashid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hashid';
    }
}
