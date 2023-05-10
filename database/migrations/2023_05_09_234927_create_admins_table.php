<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_CIN')->unique();
            $table->string('a_First_Name', 100);
            $table->string('a_Last_Name', 100);
            $table->string('a_username', 255);
            $table->string('a_email', 100);
            $table->string('a_N_Telephone', 20);
            $table->string('a_password', 100);
            $table->string('a_c_password', 100);
            $table->string('a_image', 255);
            $table->integer('a_role')->nullable();
            $table->integer('a_IDE_entreprise');
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
        Schema::dropIfExists('admins');
    }
}
