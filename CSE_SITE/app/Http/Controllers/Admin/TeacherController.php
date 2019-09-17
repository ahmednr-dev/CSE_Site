<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Teacher;
use Image;




class TeacherController extends Controller
{
    //
    public function index(){

            $teachers = Teacher::all();

            return view('admin.teacher')->with('teachers',$teachers);
    }

    
    public function store(Request $request){

        $teacher = new Teacher;

        $teacher->name = $request->name;
        $teacher->degree = $request->degree;

       // Uploed The Featured Image If any                  
                    if($request->hasFile('photo'))
                    {
                    // Assign input to Variable           
                    $photo = $request->photo;
                    // Name File  time + - + photoName 
                    $filename =  $photo->getClientOriginalName();
                    // Save in Folder public / images / blogs  + nameFile
                    $location = public_path('images/teacher/'.$filename);
                    // Intervention Image Package 
                    Image::make($photo)->resize('220','220')->save($location);
                    // Save $filename To Database
                    $teacher->photo = $filename;
                    }

        $teacher->save();

        return redirect('/dashboard/teacher')->with('status','Success');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
      
        return view('admin.teacher-edit')->with('teacher',$teacher);
    }

    public function update(Request $request,$id)
    {

       
        $teacher = Teacher::find($id);

        $teacher->name = $request->name;
        $teacher->degree = $request->degree;
    
        if($request->hasFile('photo'))
        {
        // Assign input to Variable           
        $photo = $request->photo;
        // Name File  time + - + photoName 
        
        $filename =  $photo->getClientOriginalName('teacher1.png');
        // Save in Folder public / images / blogs  + nameFile
        $location = public_path('images/teacher/'.$filename);
        // Intervention Image Package 
        Image::make($photo)->resize('220','220')->save($location);
        // Save $filename To Database
        $teacher->photo = $filename;
        }

        $teacher->update();

        return redirect('/dashboard/teacher')->with('status','Updated Success');

    }

    public function delete($id){

        $teacher = Teacher::find($id);
        $teacher->delete();
        
        return  redirect()->back();
    }
}


