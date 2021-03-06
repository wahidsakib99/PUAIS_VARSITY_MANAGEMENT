<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id')->unique();
            $table->string('password');
            
            //ROLE OF USERS
            $table->boolean('admin');
            $table->boolean('teacher');
            $table->boolean('student');
            $table->boolean('advisor');
            
            //IF BLOCKED
            $table->boolean('active');
            $table->boolean('disabled');
            
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
}
