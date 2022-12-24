<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('name_expert');
            $table->string('code_expert');
            $table->string('mail_expert');
            $table->string('tel_expert');
            $table->string('etab_expert');
            $table->string('spec_expert');
            $table->string('grade_expert');
            $table->string('adressprof');
            $table->string('fax');         
            $table->string('compteccp');
            $table->string('cleccp');
            $table->string('cbank');
            $table->string('agencebank');

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
        Schema::dropIfExists('experts');
    }
}
