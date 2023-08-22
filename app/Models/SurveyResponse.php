<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class SurveyResponse extends Model
{
    protected $collection = 'survey';
    protected $guarded = [];
}
