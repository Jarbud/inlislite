<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class OpacLogs extends Model
{
    protected $collection = 'opaclogs';
    protected $fillable = [
        'ID', 'User_id', 'ip', 'jenis_pencarian', 'keyword',
        'jenis_bahan', 'waktu', 'url', 'isLKD', 'CreatedBy',
        'CreateDate', 'CreateTerminal', 'UpdateBy', 'UpdateDate',
        'UpdateTerminal', 'Target_Pembaca', 'Bahasa', 'Bentuk_Karya'
    ];
}
