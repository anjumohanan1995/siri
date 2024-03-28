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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('project_title')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile_one')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('copy_right')->nullable();
            $table->string('favicon')->nullable();
            $table->string('language')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('preloader_logo')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
