<?php

namespace App\Models;

use App\Support\Facade\Hashid;

trait HasHashid
{
    public function getHashidAttribute()
    {
        return static::HASHID_PREFIX.$this->hashid_without_prefix;
    }

    public function getHashidWithoutPrefixAttribute()
    {
        return Hashid::encode($this->id);
    }
}
