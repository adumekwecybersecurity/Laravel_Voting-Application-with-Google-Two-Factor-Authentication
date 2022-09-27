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
        Schema::create('nominees', function (Blueprint $table) {
            $table->id();
            $table->string("stud_ID");
            $table->string("Dept");
            $table->string('firstName');
            $table->string('midName');
            $table->string('surName');
            $table->string('DOB');
            $table->string('gender');
            $table->string("nominee_ID");
            $table->string("position");
            $table->string("post_ID");
            $table->string("post_Memo");
            $table->integer("recent_Vote")->nullable();
            $table->string("phone");
            $table->string("email");
            $table->string("Address1");
            $table->string("Address2");
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('nominees');
    }
};
