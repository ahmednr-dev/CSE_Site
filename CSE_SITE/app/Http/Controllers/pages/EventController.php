<?php


namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//  Models
use App\User;
use App\Blog;
// Intervention Image  
use Image;



class EventController extends Controller
{

    protected $request;
                                          // Auth 
    public function __construct(Request $request)
    {
         $this->middleware('auth',['except'=>['index','showPicHome','show']]);
         $this->request = $request;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $events = Blog::events()->paginate(5);
        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { return view('event.create');}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $request = $this->request;
                // simple Validation 
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'photo'=>'image|mimes:jpeg,png,jpg|max:2048' // size 2 Mega
        ]);
       
                            // Store Data In Database
        $newevent= new Blog();
        $newevent->type = $request->input('type') ;   
        $newevent->title = $request->input('title') ;               
        $newevent->body =  $request->input('body');
        $newDate = Date('ymdhs');
        $replace = array(" ", "/",".","+",'*','@', '#','$','%','^', '&', '!', '~', '<', '>','?', '؟','=','{', '}', '[', ']', '؛', '×', '×', ',', '،', '\\',);
        $newevent->slug = str_replace($replace,"-",strtolower($newevent->title)).$newDate;

                   // Store Photo In Database
         if($request->hasFile('photo'))
         {
              $photo    =  $request->photo;
              $repPhoto =  str_replace($replace,"-",strtolower($photo->getClientOriginalName()));
              $filename =  time() .'-'.   $repPhoto;
           // Save in Folder public / images / events  + nameFile
          $location = public_path('images/events/'.$filename);
           // Intervention Image Package 
           Image::make($photo)->resize('800','530')->save($location);
           // Save $filename To Database
           $newevent->photo = $filename;
        }
          // Save Data
         $newevent->save();
                                // success Message in Flash
        return redirect ('/event')->with('success','post is created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $events = Blog::where("slug",$slug)->first();
        return view('event.show',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $event)
    {
       
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $request = $this->request;
        
                // Validate 
      $request->validate([
          'title' => 'bail|required|min:3',
          'body' => 'required',
          'photo'=>'image|mimes:jpeg,png,jpg|max:2048'
      ]);


               // Store Data 
      $newevent = Blog::find($id);
      $newevent->type = $request->input('type') ;               
      $newevent->title = $request->input('title') ;               
      $newevent->body  =  $request->input('body');


            // Uploed The Featured Image If any                  
         if($request->hasFile('photo'))
         {
         // Assign input to Variable           
         $photo = $request->photo;
         // Name File  time + - + photoName 
         $filename =  time() .'-'. $photo->getClientOriginalName();
         // Save in Folder public / images / events  + nameFile
         $location = public_path('images/events/'.$filename);
         // Intervention Image Package 
         Image::make($photo)->resize('380','480')->save($location);
         // Save $filename To Database
         $newevent->photo = $filename;
         }

                     $newevent->save();
        return redirect('event/'.$newevent->slug)->with('success','update Successufly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $event)
    {
        

       $event->delete();

       return redirect()->action('pages\EventController@index', ['success' => 'Delete Successe']);
    }
}
