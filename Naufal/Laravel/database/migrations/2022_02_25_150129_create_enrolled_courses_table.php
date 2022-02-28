<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolledCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled_courses', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('a')->nullable();
            $table->integer('b')->nullable();
            $table->integer('c')->nullable();
            $table->integer('d')->nullable();
            $table->integer('e')->nullable();
            $table->integer('f')->nullable();
            $table->integer('g')->nullable();
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
        Schema::dropIfExists('enrolled_courses');
    }
}
