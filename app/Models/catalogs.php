<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class catalogs extends Model
{
    protected $collection = 'catalogs';

    public function worksheets(){
        return $this->belongsTo('App\Models\worksheets', 'Worksheet_id', 'ID');
    }
}
