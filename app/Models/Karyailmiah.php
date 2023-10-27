<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Karyailmiah extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Judul',
        'Nim',
        'Prodi',
        'Wa',
        'Email',
        'Hibah',
        'Bukti',
        'Pembimbing',
        'KoPromotor1',
        'KoPromotor2',
        'Penguji1',
        'Penguji2',
        'Penguji3',
        'Penguji4',
        'Penguji5',
        'Penguji6',
        'FileBgAwal',
        'FileBgUtama',
        'FileBgAkhir',
        'Pernyataan',
        'UserEmail',
        'Status',
        'MsgDitolak',
    ];
}
