<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// invoke For Language 
use App\Http\Requests;
use illuminate\support\facades\session;
use illuminate\support\facades\input;
use App;
use Language;



use Illuminate\Support\Facades\Auth;

//



class LanguageController extends Controller
{

   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

      $this->middleware('auth',['except'=>['changeLanguage']]);



    }
   
/**
* @desk to change the current language 
* @rrequest Ajax 
*/
                                  

    public function changeLanguage(Request $request)
    {
    
            if ($request->ajax())
      {
                //$request->session()->forget('locale');
                $request->session()->put('locale',$request->locale);
                $request->session()->flash('alert-success',
                ('app.locale_change_success'));
               
      }
      

}


}
