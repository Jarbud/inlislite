<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class partners extends Model
{
    protected $collection = 'partners';
    protected $fillable = [
        'Name', 'Address', 'Phone', 'Fax', 'Province', 'City'
    ];
}
