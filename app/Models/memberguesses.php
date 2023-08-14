<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class memberguesses extends Model
{
    protected $collection = 'memberguesses';
    protected $guarded = [];
}
