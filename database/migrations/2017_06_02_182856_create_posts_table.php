<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumText('body');
            $table->string('tag');
            $table->integer('category_id')->unsigned();
<<<<<<< HEAD
            $table->integer('comment_id')->unsigned();
            $table->timestamps();
=======
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
           $table->timestamps();
>>>>>>> ebea0f731fa8bebac7d590699d73aba5f45ec30b
        });

        Schema::table('posts', function($table) {
            // if error in migrate commit  
             $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
             $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
