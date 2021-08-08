<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamResultsTable extends Migration
{
    public function up()
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('math')->nullable();
            $table->integer('database')->nullable();
            $table->string('programming_1')->nullable();
            $table->integer('software_engineer')->nullable();
            $table->integer('computer_science')->nullable();
            $table->integer('total')->nullable();
            $table->string('rating')->nullable();
            $table->integer('database_2')->nullable();
            $table->integer('programming_2')->nullable();
            $table->integer('statistics')->nullable();
            $table->string('selected')->nullable();
            $table->string('project')->nullable();
            $table->integer('total_p')->nullable();
            $table->string('overall_rating')->nullable();
            $table->timestamps();
        });
    }
}
