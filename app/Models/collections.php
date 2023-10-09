<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class collections extends Model
{
    protected $collection = 'collections';
    protected $fillable = [
        'ID', 'Worksheets_id', 'JumlahEkslempar',
        'NoInduk', 'NomorBarcode', 'RFID',
        'TanggalPengadaan',
        'Source_id', 'Partner_id', 'Media_id', 'Category_id', 'Rule_id',
        'Location_Library_id', 'Location_id', 'Status_id',
        'Currency', 'Price', 'PriceType',
        'CallNumber', 
    ];
}
