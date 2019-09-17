<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

        
                        // Language Group 
        Route::middleware(['Language'])->group(function () {
                                            // Pages  
                    require 'language.php';   
                    require 'pages.php';
        });

                                    // Control Panel Group
        Route::middleware(['auth'])->group(function () {
                    require 'admin.php';
        });

                                    // Rigster Closed 
        Auth::routes(['register' => true]);

