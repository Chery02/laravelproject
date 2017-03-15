<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\grade;

class GradeController extends Controller
{
   
    public function index()
    {
        $grades = grade::all();
        return view ('blades.student-welcome',compact('grades'));
    }
    
    public function create()
    {
        return view ('blades.student-add');
    }
  
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->name = $request->name;
        $grade->Filipino_2 = $request->Filipino_2;
        $grade->Statistics= $request->Statistics;
        $grade->Family_Planning= $request->Family_Planning;
        $grade->Business_Process = $request->Business_Process;
        $grade->Bible_Science_2= $request->Bible_Science_2;
        $grade->Web_App_2 = $request->Web_App_2;
        $grade->Team_Sports= $request->Team_Sports;
        $grade->save();
       
    }
    
    public function show($id)
    {
        $grade = grade::findorfail($id);
        return view('blades.student-grade',compact('grade'));
    }
    
    public function edit($id)
    {
         $grade = grade::findorfail($id);
        return view('blades.student-Edit',compact('grade'));  
    }
    
    public function update(Request $request, $id)
    {
        $grade = grade::findorfail($id);
        $grade->update($request->all());
        return redirect('/grade');

    }

    public function destroy($id)
    {
        $grade = grade::findorfail($id);
        $grade->delete();
        return redirect('/grade');

    }
}
