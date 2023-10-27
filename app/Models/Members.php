<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Members extends Model
{
    protected $collection = "Members";

    protected $fillable = [
        'IdentityType_id',
        'IdentityNo',
        'email',
        'Fullname',
        'PlaceOfBirth',
        'DateOfBirth',
        'Sex_id',
        'Address',
        'AddressNow',
        'EducationLevel_id',
        'Job_id',
        'Agama_id',
        'MaritalStatus_id',
        'NoHp',
        'Phone',
        'InstitutionName',
        'InstitutionAddress',
        'InstitutionPhone',
        'HasVerified',
    ];
}
