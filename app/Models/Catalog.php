<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Catalog extends Model
{
    protected $collection = 'catalogs';
    /*protected $fillable = [
        'ID', 'ControlNumber', 'BIBID', 'Title', 'Author', 'Edition', 'Publisher',
        'PublishLocation', 'PublishYear', 'Publikasi', 'Subject', 'PhysicalDescription', 'ISBN', 'CallNumber',
        'Note', 'Languages', 'DeweyNo', 'ApproveDateOPAC', 'IsOPAC', 'IsBNI', 'IsKIN', 'IsRDA',
        'CoverURL', 'Branch_id', 'Worksheet_id', 'Member_id'
    ];*/
}
