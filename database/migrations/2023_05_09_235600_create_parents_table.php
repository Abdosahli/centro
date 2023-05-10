<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id('id_parent');
            $table->string('p_CIN')->unique();
            $table->string('p_image', 255);
            $table->string('p_fname', 100);
            $table->string('p_lname', 100);
            $table->string('p_gender', 30);
            $table->string('p_occupation', 30);
            $table->string('p_address', 100);
            $table->string('p_phone', 50);
            $table->string('p_email', 50);
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
        Schema::dropIfExists('parents');
    }
}
