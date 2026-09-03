<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
        protected $teacher;
    public function __construct()
    {
        $this->teacher = new Teacher();
    }
    public function index()
    {
        $response['teachers']= $this->teacher->all();
        return view('teachers')->with($response);
    }
    public function saveTeacher(Request $request)
    {
        $validatedData = $request->validate([
            'tch_name' => 'required|string|max:100',
            'tch_employeeId' => 'required|string|max:25|unique:teachers,tch_employeeId',
            'tch_subject' => 'required|string|max:100',
            'tch_gender' => 'required|in:male,female',
            'tch_phone' => 'nullable|string|max:15',
            'tch_dob' => 'required|date',
            'tch_email' => 'nullable|email|max:100|unique:teachers,tch_email',
            'tch_joiningDate' => 'required|date',
        ]);

        $this->teacher->create($validatedData);
        return redirect()->back();
    }
}
