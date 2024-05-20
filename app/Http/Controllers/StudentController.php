<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\View;

class StudentController extends Controller
{
    public function index(){
   
 
  $students = student::all();

  
  return View::make('index')
      ->with('students', $students);
  
  
  
    }
     
    public function home(){
      
      $number = student::count();

      return View::make('dashboard') -> with('students',$number);



    }



    public function store(Request $request){
          
      $student = new student();
      $student->fname = $request->input('fname');
      $student->lname = $request->input('lname');
      $student->phone_number = $request->input('number');
      $student->age = $request->input('age');
      $student->address = $request->input('adress');
      $student -> save();

      return View::make('add');


    }

    public function create(){
      return View::make('add');
      
    }
    public function delete($id){
      $student =student::find($id);
       $student->delete();
      return redirect() -> route('view');
    }

    public function edit($id){
     $student = student::find($id);

     return View::make('update')
     ->with('student', $student);
   

    }
    public function update(Request $request,$id){
      $student = student::find($id);
      $students = student::all();
      $student->fname = $request->input('fname');
      $student->lname = $request->input('lname');
      $student->phone_number = $request->input('number');
      $student->age = $request->input('age');
      $student->address = $request->input('adress');
      $student -> update();
      $student = student::find($id); 
      return redirect()->route('view');

    }

  }
