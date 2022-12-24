<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code_labo');
            $table->string('intitule_labo');
            $table->string('etab');
            $table->string('dir_labo');
            $table->string('email_dir');
            $table->string('num_dir');
            $table->string('gdomaine_labo');
            $table->string('domaine_labo');
            $table->string('acronyme');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratoires');
    }
}
