<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->number = $request->number;
        $student->email = $request->email;
        $student->save();
        return redirect()->route('Students.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
    //    return $id;
    
       $students= student:: findOrFail($id);
       return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Student $student)
    // {
    //     //
    // }
    public function update(Request $request, $id)
    {
        $students = student::findOrFail($id); 
        $students->update([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email
        ]);
        return redirect()->route('students.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       Student::destroy($id);
        return redirect()->route('Students.index');
    }
}
