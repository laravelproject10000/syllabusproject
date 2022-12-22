<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyllabusdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabusdata', function (Blueprint $table) {
            $table->id();
            $table->string('Year_Regulate');
            $table->string('Department');
            $table->string('Program');
            $table->string('Semester');
            $table->string('Max_time');
            $table->string('Credits');
            $table->string('File');
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
        Schema::dropIfExists('syllabusdata');
    }
}
