<?php

namespace App\Http\Middleware;

use Closure;

class CheckTime
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
     
        return $next($request);
     
        //dd(now()); 

      // dd(getdate()); 



         /*        if(now() != )
        {
           
        }
       return response('Not Allowed Setup Youe Date')
    */

    } }