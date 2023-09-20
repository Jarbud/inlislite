<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class CatalogFiles extends Model
{
    protected $collection = 'catalogfiles';
    protected $fillable = ['ID', 'Catalog_id', 'File-URL', 'FileFlash', 'IsPublish'];
}
