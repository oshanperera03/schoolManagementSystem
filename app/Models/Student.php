<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'stu_name',
        'stu_admissionNo',
        'stu_address',
        'stu_gender',
        'stu_phone',
        'stu_dob',
        'stu_email',
        'stu_admissionDate',
    ];
}
