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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('stud_ID')->unique();
            $table->string('firstName');
            $table->string('midName');
            $table->string('surName');
            $table->string('userName')->unique();
            $table->string('DOB');
            $table->string('gender');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('Dept');
            $table->string('code')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique();
		    $table->timestamp('email_verified_at')->nullable();
		    $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
		    $table->string('password');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
