<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_category_id')->unsigned();
            $table->string('name');
            $table->string('teacher_name');
            $table->string('level');
            $table->string('study_date');
            $table->string('study_time');
            $table->text('content')->nullable();
            $table->double('price');
            $table->double('discount')->nullable();
            $table->boolean('featured');
            $table->string('tag')->nullable();
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
        Schema::dropIfExists('products');
    }
}
