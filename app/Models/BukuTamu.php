<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class BukuTamu extends Model
{
    protected $collection = 'groupguesses';
    protected $fillable = [
        'NamaKetua', 'NomorTelponKetua', 'AsalInstansi', 'AlamatInstansi','TeleponInstansi', 'EmailInstansi',
        'CountLaki', 'CountPerempuan',
        'CountPelajar', 'CountGuru', 'CountMahasiswa', 'CountDosen',
        'CountSwasta', 'CountWiraswasta', 'Pensiunan',
        'CountPNS', 'CountTNI', 'CountPeneliti', 'CountLainnya',
        'CountSD', 'CountSMP', 'CountSMA',
        'CountD1', 'CountD2', 'CountD3',
        'CountS1', 'CountS2', 'CountS3'
    ];
}
