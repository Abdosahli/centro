<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('pin_Masare', 15)->unique();
            $table->string('s_image', 255);
            $table->string('s_fname', 100);
            $table->string('s_lname', 100);
            $table->string('father_name', 255);
            
            $table->date('date_nessance');
            $table->string('class', 15);
            $table->string('s_gender', 100);
            $table->string('s_phone', 255)->nullable();
            $table->integer('academic_year');
            $table->unsignedBigInteger('id_year')->nullable();
            $table->unsignedBigInteger('id_parent')->nullable();
            $table->timestamps();
            $table->foreign('id_year')->references('id_year')->on('yaers')->onDelete('cascade');
            $table->foreign('id_parent')->references('id_parent')->on('parents')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
