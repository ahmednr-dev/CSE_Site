<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
// Intervention Image  
use Image;


class AboutController extends Controller
{
    //
    public function aboutPages(){

        $about = About::first();
        return view('pages.about')->with('about',$about);
    }


    public function index(){

        $about = About::all();
        return view('admin.aboutus')->with('about',$about);
    }

    public function store(Request $request){

        $about = new About;

        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->description = $request->description;

       // Uploed The Featured Image If any                  
                    if($request->hasFile('photo'))
                    {
                    // Assign input to Variable           
                    $photo = $request->photo;
                    // Name File  time + - + photoName 
                    $filename =  $photo->getClientOriginalName();
                    // Save in Folder public / images / blogs  + nameFile
                    $location = public_path('images/about/'.$filename);
                    // Intervention Image Package 
                    Image::make($photo)->resize('380','480')->save($location);
                    // Save $filename To Database
                    $about->photo = $filename;
                    }

        $about->save();

        return redirect('/dashboard/about-us')->with('status','Success');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);

        return view('admin.abotus-edit')->with('about',$about);
    }

    public function update(Request $request,$id)
    {

       
        $about = About::find($id);

        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->description = $request->description;
    
        if($request->hasFile('photo'))
        {
        // Assign input to Variable           
        $photo = $request->photo;
        // Name File  time + - + photoName 
        $filename =  $photo->getClientOriginalName();
        // Save in Folder public / images / blogs  + nameFile
        $location = public_path('images/about/'.$filename);
        // Intervention Image Package 
        Image::make($photo)->resize('1900','600')->save($location);
        // Save $filename To Database
        $about->photo = $filename;
        }

        $about->update();

        return redirect('/dashboard/about-us')->with('status','Updated Success');

    }

    public function delete($id){

        $about = About::find($id);
        $about->delete();
        
        return  redirect()->back();
    }
}
