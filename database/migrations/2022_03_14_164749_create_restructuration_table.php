<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestructurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restructuration', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code_labo');
            $table->string('intitule_labo');
            $table->string('etab');
            $table->string('pvCL');
            $table->string('pvCSF');
            $table->string('CDetat');
            $table->string('etat');
            $table->string('validated');
            $table->string('changement');


    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restructuration');
    }
}
