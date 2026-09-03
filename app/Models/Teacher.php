<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'tch_name',
        'tch_employeeId',
        'tch_subject',
        'tch_gender',
        'tch_phone',
        'tch_dob',
        'tch_email',
        'tch_joiningDate',
    ];
}
