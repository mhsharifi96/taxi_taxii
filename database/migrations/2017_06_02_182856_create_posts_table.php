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
            $table->boolean( 'available')->default(0);
            $table->integer('category_id')->unsigned();


            // $table->integer('comment_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('posts', function($table) {
            // if error in migrate commit  

             $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
