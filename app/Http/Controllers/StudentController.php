<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the  .
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        //return($students);
        return view('student.index',['students'=>$students]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'success';
        // return $request;

        // $student = new Student;
        // $student->first_name = $request->first_name;
        // $student->last_name = $request->last_name;
        // $student->save();

        $validateData = $request->validate([
            'first_name'=>'required|max:25',
            'last_name'=>'required|max:25',
            'user_id'=>'required|max:20'
        ]);
        Student::create($validateData);
        return redirect('/student')->with('success','Student Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::findOrFail($id);
        //return $students;
        //return view('student.view',['student'=>$student]);
        return view('student.view',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::findOrFail($id);
        return view('student.edit',compact('student'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request;

        // $student = Student::findOrFail($id);
        // $student->first_name = $request->first_name;
        // $student->last_name = $request->last_name;
        // $student->update();

        $validatedData = $request->validate([
            'first_name'=>'required|max:25',
            'last_name'=>'required|max:25',
            'user_id'=>'required|max:20'
        ]);

        Student::whereId($id)->update($validatedData);
        return redirect('/student')->with('success','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/student')->with('success','Student Deleted Successfully');
    }
}
