<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Cover extends Model
{
    protected $collection = 'cover';
    protected $fillable = ['image_data', 'image'];
}
