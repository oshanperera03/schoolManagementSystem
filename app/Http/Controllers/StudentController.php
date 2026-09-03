<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    public function saveStudent(Request $request)
    {
        $validatedData = $request->validate([
            'stu_name' => 'required|string|max:100',
            'stu_admissionNo' => 'required|string|max:25|unique:students,stu_admissionNo',
            'stu_address' => 'required|string|max:150',
            'stu_gender' => 'required|in:male,female',
            'stu_phone' => 'nullable|string|max:15',
            'stu_dob' => 'required|date',
            'stu_email' => 'nullable|email|max:255|unique:students,stu_email',
            'stu_admissionDate' => 'required|date',
        ]);

        $this->student->create($validatedData);
        return redirect()->back();
    }

}
