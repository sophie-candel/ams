<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudokasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judokas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo');
            $table->date('date_naissance');
            $table->string('dojo');
            $table->string('grade');
            $table->string('licence');
            $table->string('telephone');
            $table->string('portable');
            $table->string('email');
            $table->string('adresse_rue');
            $table->string('adresse_cp');
            $table->string('adresse_ville');
            $table->rememberToken();
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
        Schema::dropIfExists('judokas');
    }
}
