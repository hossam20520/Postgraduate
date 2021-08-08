<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExamResultsTable extends Migration
{
    public function up()
    {
        Schema::table('exam_results', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id', 'student_fk_4563124')->references('id')->on('users');
        });
    }
}
