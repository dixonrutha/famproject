<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpokeajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpokeajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sex');
            $table->string('tarehe_kupokea');
            $table->string('njia_kupokea');
            // $table->string('kiasi_pokea');
            $table->string('email');
            $table->string('simu');
            $table->string('eneo_analoishi');
            $table->string('muda_kuishi');
            $table->string('makazi');
            $table->string('mengine');
            $table->string('hela');

            // uongozi
            $table->string('jina');
            $table->string('cheo');
            $table->string('tarehe');
       


            
            
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
        Schema::dropIfExists('mpokeajis');
    }
}
