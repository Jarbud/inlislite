<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class CatalogsTaging extends Model
{
    protected $collection = 'catalogstaging';
    protected $fillable = ['ID', 'Title', 'Author', 'Publishment', 'Edition', 'Worksheet_id'];
}
