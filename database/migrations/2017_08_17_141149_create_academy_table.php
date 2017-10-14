<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');


        });

        Schema::create('academy_student', function (Blueprint $table) {
            $table->integer('student_id');
            $table->integer('academy_id');
            $table->primary(['student_id','academy_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acdemies');
        Schema::dropIfExists('academy_student');
    }
}
