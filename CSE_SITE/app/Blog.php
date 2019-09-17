<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Fillable example
   // protected $fillable = ['title','body','photo','type'];

   // Guarded Example
   protected $guarded = [];

    
            /*                  Define Scope 

            Scope Define   lowercase(scope) + UpperCase(NameScope)  
            
            When we return scope we write namefunction lowercase
            
            */

    public function scopeNews($query){

        return $query->where('type','news');
    }
    
    public function scopeEvents($query){

        return $query->where('type','events');
    }

           //////////////////////////////////////////

    public function user(){

            // Relation Between User And Blogs 
            // Every Blogs Belong to  User 

        return $this->belongsTo(User::class);
    }


}
