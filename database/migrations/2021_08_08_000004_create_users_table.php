<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('id_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('department')->nullable();
            $table->string('degree')->nullable();
            $table->string('qualification')->nullable();
            $table->integer('year')->nullable();
            $table->string('student')->nullable();
            $table->timestamps();
        });
    }
}
