<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('blog_category_id')->nullable();
            $table->string('title');
            $table->string('subtitle');
            $table->string('image');
            $table->string('content',(5000));
            $table->string('content_1',(3000));
            $table->string('content_2',(5000));
            $table->string('category');
            $table->string('image_1');
            $table->string('image_2');
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
