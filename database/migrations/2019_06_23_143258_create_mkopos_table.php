<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMkoposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mkopos', function (Blueprint $table) {
            $table->bigIncrements('id');
            // taarifa za mwombaji
            $table->string('name');
            $table->string('partiner');
            $table->string('tarehe_kuomba_mkopo');
            $table->string('tarehe_kuzaliwa');
            $table->string('phone');
            $table->string('email');
            $table->string('sex');
            $table->string('merital_status');
            $table->string('makazi');
            $table->string('others');
            $table->string('location');
            $table->string('location_since');

   // taarifa za mwombaji
          
            $table->string('amount');
            $table->string('tarehe_ya_mkopo');
            $table->string('rejesho');
            $table->string('dhamana');
            $table->string('chanzo_cha_mapato');



            // taarifa za mzami 
        
          
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
        Schema::dropIfExists('mkopos');
    }
}
