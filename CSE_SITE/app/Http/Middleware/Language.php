<?php

namespace App\Http\Middleware;

use Closure;
// Invoke 
use Carbon\Carbon;
use Session;
use App;
use Config;


class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    {
                            
        if ( Session::has('locale')) {
            $locale = Session::get('locale', Config::get('app.locale'));

        } else {
            $locale = 'en';
        }
        App::setLocale($locale);
        return $next($request);
    }
    
}
