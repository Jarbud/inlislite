<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Auth\User as Authenticatable;


class Verify extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'photoKtp',
        'photoSelfie',
        'kode',
        'user_email',

    ];
}
