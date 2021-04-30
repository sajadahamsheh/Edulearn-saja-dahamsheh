<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_price');
            $table->longText('course_desc');
            $table->string('course_discount');
            $table->string('course_img');
            $table->string('course_level');
            $table->string('lessons');
            $table->string('course_teacher');
            $table->string('teacher_img');
            $table->string('teacher_education');
            $table->bigInteger('cat_id')->unsigned();
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('course_category') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
