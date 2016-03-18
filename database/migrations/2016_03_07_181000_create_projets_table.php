<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('name', 80);
            $table->string('adresse', 150);
            $table->string('email', 150);
            $table->string('tel', 10);
            $table->longText('ficheID');
            $table->string('typeProjet', 80);
            $table->longText('contexte');
            $table->longText('demande');
            $table->longText('objectifs');
            $table->longText('contraintes');
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
        Schema::drop('projets');
    }
}
