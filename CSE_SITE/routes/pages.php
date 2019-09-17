<?php

/*
|--------------------------------------------------------------------------

                            Blog  Event Route ;

|--------------------------------------------------------------------------

*/

   /*      Route::resource('blog','pages\BlogController');
        Route::resource('event','pages\EventController'); */
        
            Route::resources([
               'blog'=>'pages\BlogController',
               'event'=>'pages\EventController'
            ]);
        
           Route::prefix('/')->group(function(){
           Route::get('/', 'pages\BlogController@showPicHome');
           Route::get('/about','Admin\AboutController@aboutPages');
           Route::get('/contact','pages\ContactController@contact');
           Route::post('/dosend','pages\ContactController@dosend');
           Route::get('/gallery', 'pages\BlogController@gallery');
           
           Route::view('/find-us', 'pages.map');
           Route::view('/faq', 'pages.faq');
           Route::view('/faculty-map', 'pages.faculty-map');
           Route::view('/teachers', 'pages.teachers');
           Route::view('/quality', 'pages.quality');
           Route::view('/studentActivities', 'pages.student-activities');
        });                
       