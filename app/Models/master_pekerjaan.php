<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class master_pekerjaan extends Model
{
    protected $collection = 'master_pekerjaan';

    protected $fillable = ['id', 'Pekerjaan'];
}
