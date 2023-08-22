<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class MemberGuesses extends Model
{
    protected $collection = 'memberguesses';
    protected $fillable = ['identitas', 'nomor', 'password', 'email', 'name', 'tempat', 'tanggal', 'Jenis', 
    'AlamatRumah', 'AlamatSaatini', 'Pendidikan', 'Kerja', 'agama', 'Status', 'NoHP', 'NoRumah', 
    'Institusi', 'AlamatIns', 'NoIns'];
}
