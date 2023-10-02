<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class CatalogFile extends Model
{
    protected $collection = 'catalogfiles';
    protected $fillable = ['FileURL', 'FileFlash'];
}
