<?php

                                    
                        // Language Change 

    Route::get('locale', function () {return \App::getLocale();});                                   
    Route::get('locale/{locale}', function ($locale) {Session::put('locale', $locale); return redirect()->back();});                  
    Route::post('/language-chooser', 'LanguageController@changeLanguage');                         
    Route::post('/language/', array('before' => 'csrf','as' => 'language-chooser','uses' =>'LanguageController@changeLanguage'));
                        