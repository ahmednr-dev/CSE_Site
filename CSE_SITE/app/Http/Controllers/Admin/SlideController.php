<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Slide;
use Image;


class SlideController extends Controller
{
    

    public function index(){

        $slide = Slide::all();
        return view('admin.slide')->with('slide',$slide);
    }

    public function store(Request $request){

        $slide = new Slide;

        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle;
        $slide->url = $request->url;
    
       // Uploed The Featured Image If any                  
                    if($request->hasFile('photo'))
                    {
                    // Assign input to Variable           
                    $photo = $request->photo;
                    // Name File  time + - + photoName 
                    $filename =  $photo->getClientOriginalName();
                    // Save in Folder public / images / blogs  + nameFile
                    $location = public_path('images/slide/'.$filename);
                    // Intervention Image Package 
                    Image::make($photo)->resize('1500','800')->save($location);
                    // Save $filename To Database
                    $slide->photo = $filename;
                    }

        $slide->save();

        return redirect('/dashboard/slide')->with('status','Success');
    }

    public function edit($id)
    {
      

        $slide = Slide::findOrFail($id);

        return view('admin.slide-edit')->with('slide',$slide);
    }

    public function update(Request $request,$id)
    {

       
        $slide = Slide::find($id);

        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle;
        $slide->url = $request->url;
      
    
        if($request->hasFile('photo'))
        {
        // Assign input to Variable           
        $photo = $request->photo;
        // Name File  time + - + photoName 
        $filename =  $photo->getClientOriginalName();
        // Save in Folder public / images / blogs  + nameFile
        $location = public_path('images/slide/'.$filename);
        // Intervention Image Package 
        Image::make($photo)->resize('1500','800')->save($location);
        // Save $filename To Database
        $slide->photo = $filename;
        }

        $slide->update();

        return redirect('/dashboard/slide')->with('status','Updated Success');

    }

    public function delete($id){

        $slide = Slide::find($id);
        $slide->delete();
        
        return  redirect()->back();
    }



}
