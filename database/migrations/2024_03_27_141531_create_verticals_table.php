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
        Schema::create('verticals', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title1')->nullable();
            $table->string('slug')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('content')->nullable();    
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();     
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
        Schema::dropIfExists('verticals');
    }
};