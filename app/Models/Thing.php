<?php

namespace App\Models;

use App\Models\HasHashid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;
    use HasHashid;

    const HASHID_PREFIX = 'thg_';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
