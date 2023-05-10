<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id('employe_id');
            $table->string('e_CIN')->unique();
            $table->integer('code_CNSS');
            $table->string('e_fname', 255)->nullable();
            $table->string('e_lname', 255)->nullable();
            $table->string('e_address', 255)->nullable();
            $table->string('e_phone', 255)->nullable();
            $table->string('e_email', 255)->nullable();
            $table->string('e_image', 100);
            
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('type', 255);
            $table->date('e_date_nessance');
            $table->string('e_gender', 15);
            $table->unsignedBigInteger('id_mat');
            $table->timestamps();
            $table->foreign('id_mat')->references('id_mat')->on('matieres')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
