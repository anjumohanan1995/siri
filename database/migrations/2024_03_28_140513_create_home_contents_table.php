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
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->string('panel_one_title');
            $table->string('panel_one_subtitle')->nullable();
            $table->string('panel_one_bgimage')->nullable();
            $table->string('panel_one_link')->nullable();     
            $table->string('panel_one_link_label')->nullable();
            $table->string('panel_two_description')->nullable();
            $table->string('panel_two_image')->nullable();
            $table->string('panel_three_title')->nullable();
            $table->string('panel_three_subtitle')->nullable();
            $table->string('panel_four_title')->nullable();
            $table->text('panel_four_description')->nullable();
            $table->string('panel_four_image')->nullable();
            $table->string('panel_five_title')->nullable();
            $table->text('panel_five_description')->nullable();
            $table->string('panel_five_video')->nullable();
            $table->string('panel_six_title')->nullable();
            $table->text('panel_six_description')->nullable();
            $table->string('panel_six_image')->nullable();
            $table->string('panel_seven_title')->nullable();
            $table->text('panel_seven_description')->nullable();
            $table->string('panel_seven_image')->nullable();
            $table->string('panel_seven_link')->nullable();
            $table->string('panel_seven_link_label')->nullable();
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
        Schema::dropIfExists('home_contents');
    }
};
