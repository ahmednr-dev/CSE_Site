<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Events\PostHasCreatedEvent;
use App\Mail\PostCreated; 

//  Models 
use App\User;
use App\Blog;
use Image;
use App\link;


class BlogController extends Controller
{
    protected $request;

    public function __construct(Request $request)
        {    
            $this->middleware('auth')->except(['index','showPicHome','show','gallery']);
            
            $this->request = $request;                                                        
        }
                                          

                                              
     public function showPicHome()
    { 
        $blogs = Blog::news()->paginate(3);      
        $events = Blog::events()->paginate(5);
        return view('index',compact('blogs','events'));
    }

    public function gallery()
    {
        $blogs = Blog::paginate(4);
        return view('pages.gallery',compact('blogs'));
    }

    public function index()
    {
       $blogs = Blog::news()->paginate(5); 

       return view('blog.index',compact('blogs'));
    }

 
    public function create()
    {
        $blogs = new Blog();
        
        return view('blog.create',compact('blogs'));
    
    }

 
    public function store()
    {

        $request = $this->request;

        $data = $this->validateRequest();       
      
        $newBlog = new Blog();

        $blog = $this->createBlog($newBlog);

        $blog->save();
            
        // Send Email To Admin  Notification To Admin

        $user = User::find(1);
       
        event(new PostHasCreatedEvent($user));

    
        return redirect ('blog/'.$newBlog->slug)->with('success','post is created successfuly'); 
    }


    public function show($slug)
    {
                // Change id to slug url name
        $blogs = Blog::where("slug",$slug)->first();
       
        return view('blog.show',compact('blogs')); }

  
    public function edit($id)
    {
        //

        $blogs = Blog::find($id); 

        return view('blog.edit',compact('blogs'));
    }


    public function update($id)
  {

     $date     =  $this->validateRequest();
            
     $newBlog  =  Blog::find($id);

     $blog     =  $this->createBlog($newBlog);

     $blog->save();

        return redirect('blog/'.$newBlog->slug)->with('success','update Successufly');
    }

 
    public function destroy(Blog $blog)
    {
          $blog->delete();

          return redirect()->action('pages\BlogController@index', ['success' => 'Delete Successe']);
    }

    private function validateRequest(){

        $request = $this->request;
        $request->validate([
        'title' => 'bail|required|min:3',
        'body' => 'required',
        'photo'=>'image|mimes:jpeg,png,jpg|max:2048'
        ]);

    }
    private function replaceInput(){

        array(" ", "/",".","+",'*','@', 
        '#','$','%','^', '&', '!', '~',
         '<', '>','?', '؟','=','{', '}',
          '[', ']', '؛', '×', '×', ',', '،', '\\',);
    }

    private function createBlog($newBlog){

        $request = $this->request;

    $newBlog->type = $request->input('type'); 
    $newBlog->title = $request->input('title') ;               
    $newBlog->body =  $request->input('body');
    $newDate = Date('ymdhs');
    $replace = $this->replaceInput();
    $newBlog->slug = str_replace($replace,"-",strtolower($newBlog->title)).$newDate;
                 // Store Photo In Database
    if($request->hasFile('photo'))
            {
                          // Assign input to Variable           
            $photo = $request->photo;
            $repPhoto = str_replace($replace,"-",strtolower($photo->getClientOriginalName()));
            $filename =  time() .'-'.   $repPhoto;
            // Save in Folder public / images / blogs  + nameFile
           $location = public_path('images/blogs/'.$filename);
            // Intervention Image Package 
              Image::make($photo)->resize('800','530')->save($location);
            // Save $filename To Database
            $newBlog->photo = $filename;
            }
                      return  $newBlog;   
    }

}
