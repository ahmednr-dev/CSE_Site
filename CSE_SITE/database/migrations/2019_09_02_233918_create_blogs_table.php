<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            $table->Increments('id')->unsigned(); 
            $table->char('title', 100);  // Table To Save Title Of Posts
            $table->text('body');        // Table To Save Subjects
            $table->string('photo')->default('default.png');     // Table To Save Direction Of Photos  
            $table->string('type');                                                   // IF Photo not found put default.png 
           // $table->unsignedInteger('user_id');  //  Table Connect the post with the user
            $table->string('slug')->unique();    // Table To Convert Url post id To Slug 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
