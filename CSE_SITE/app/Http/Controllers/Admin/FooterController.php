<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Link;

class FooterController extends Controller
{
    //

public function links(){

            $link = Link::all();

            return view('admin.footer')->with('link',$link);

}

public function footerShow(){

    $links = Link::all();

    return view('layouts.default')->with('links',$links);

}



public function savelink(Request $request){

    $newlink = new Link;
    $newlink->name = $request->name;
    $newlink->url = $request->url;
    $newlink->save();

    return redirect()->back();
    
}


}
