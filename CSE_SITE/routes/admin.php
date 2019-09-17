
<?php

           

                /*
                |--------------------------------------------------------------------------

                                          Dashboard  Route ;

                |--------------------------------------------------------------------------

                */           

  Route::prefix('/dashboard')->group(function (){

    Route::get('/',function (){return view('admin.dashboard');});

         //   Users Route 
    Route::get('/register','Admin\DashboardController@registerd'); 
    Route::get('/register-edit/{id}','Admin\DashboardController@registeredit');
    Route::post('/add-user', 'Admin\DashboardController@addUser');
    Route::put('/register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::delete('/register-delete/{id}','Admin\DashboardController@deleteUser');
    

       //   About Route 

    Route::get('/about-us','Admin\AboutController@index');
    Route::post('/save-aboutus','Admin\AboutController@store');
    Route::get('/edit-about/{id}', 'Admin\AboutController@edit');
    Route::put('/about-update/{id}','Admin\AboutController@update');
    Route::delete('/about-delete/{id}','Admin\AboutController@delete');
  
      //   Footer Route 
    Route::get('/footer', 'Admin\FooterController@links');
    Route::post('/footer/save-link', 'Admin\FooterController@savelink');

      // Teacher Route 
    Route::get('/teacher', 'Admin\TeacherController@index');
    Route::post('/save-teacher','Admin\TeacherController@store');
    Route::get('/edit-teacher/{id}', 'Admin\TeacherController@edit');
    Route::put('/teacher-update/{id}','Admin\TeacherController@update');
    Route::delete('/teacher-delete/{id}','Admin\TeacherController@delete');

        // Blog Route 
        Route::get('/blog', 'Admin\PostsController@index');
        Route::post('/save-posts','Admin\PostsController@store');
        Route::get('/edit-posts/{id}', 'Admin\PostsController@edit');
        Route::put('/posts-update/{id}','Admin\PostsController@update');
        Route::delete('/teacher-posts/{id}','Admin\PostsController@delete');

          //   Slide Route 

    Route::get('/slide','Admin\SlideController@index');
    Route::post('/save-slide','Admin\SlideController@store');
    Route::get('/slide-edit/{id}', 'Admin\SlideController@edit');
    Route::put('/slide-update/{id}','Admin\SlideController@update');
    Route::delete('/slide-delete/{id}','Admin\SlideController@delete');
  


  });
