<?php

namespace App\Models;

use App\Support\Facade\Hashid;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

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

    public static function findOrFailByHashid($hid)
    {
        $hash = Str::after($hid, static::HASHID_PREFIX);
        $ids = Hashid::decode($hash);

        if (empty($ids)) {
            throw new ModelNotFoundException();
        }

        return static::findOrFail($ids[0]);
    }
}
