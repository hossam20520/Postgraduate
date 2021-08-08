<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterSubjectPivotTable extends Migration
{
    public function up()
    {
        Schema::create('register_subject', function (Blueprint $table) {
            $table->unsignedBigInteger('register_id');
            $table->foreign('register_id', 'register_id_fk_4563479')->references('id')->on('registers')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id', 'subject_id_fk_4563479')->references('id')->on('subjects')->onDelete('cascade');
        });
    }
}
