<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('studentname');
            $table->string('studentid')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamps();
        });
    }
}
