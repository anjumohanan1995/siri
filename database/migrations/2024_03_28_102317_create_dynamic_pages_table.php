<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_pages', function (Blueprint $table) {
            $table->id();
            $table->string('menu_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('heading')->nullable();     
            $table->string('title_one')->nullable();
            $table->text('content_one')->nullable();
            $table->string('image_one')->nullable();
            $table->string('title_two')->nullable();
            $table->text('content_two')->nullable();
            $table->string('image_two')->nullable();
            $table->string('title_three')->nullable();
            $table->text('content_three')->nullable();
            $table->string('image_three')->nullable();
            $table->string('content_image')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_pages');
    }
};
