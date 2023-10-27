<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class BacaDiTempat extends Model
{
    protected $collection = 'bacaditempat';
    protected $fillable = ['no_pengenal', 'name', 'ip', 'tanggal_kunjungan'];
}
