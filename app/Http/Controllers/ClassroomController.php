<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    protected $classroom;
    public function __construct()
    {
        $this->classroom = new Classroom();
    }
    public function index()
    {
        $response['classrooms'] = $this->classroom->all();
        return view('pages.class.classes')->with($response);
    }
    public function saveClassroom(Request $request)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|string|max:25',
            'class_grade' => 'required|integer|min:1|max:12',
            'class_capacity' => 'required|integer|min:1|max:100',
            'class_teacher' => 'required|string|max:100',
            
        ]);

        $this->classroom->create($validatedData);
        return redirect()->back();
    }
    public function editClassroom($id)
    {
        $response['classroom'] = $this->classroom->findOrFail($id);
        return view('pages.class.addClass')->with($response);
    }

    public function updateClassroom(Request $request, $id)
    {
        $classroom = $this->classroom->findOrFail($id);

        $validatedData = $request->validate([
            'class_name' => 'required|string|max:100',
            'class_grade' => 'required|integer|min:1|max:12',
            'class_capacity' => 'required|integer|min:1',
            'class_teacher' => 'required|string|max:100',
        ]);

        $classroom->update($validatedData);
        return redirect('/classrooms');
    }
    public function deleteClassroom($id)
    {
        $classroom = $this->classroom->findOrFail($id);
        $classroom->delete();
        return redirect()->back();
    }
}
