<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schoolboard_name');
            $table->string('schoolboard_adress');
            $table->string('schoolboard_phone');
            $table->string('schoolboard_email');
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
        Schema::dropIfExists('schoolboards');
    }
}
