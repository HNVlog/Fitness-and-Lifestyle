<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_check', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('email');
            $table->string('name');
            $table->string('messages');
            $table->integer('rating')->nullable();
            $table->string('product_id');
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
        Schema::dropIfExists('comment_check');
    }
}
