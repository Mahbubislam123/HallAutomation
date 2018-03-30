<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HallEstablishmentFee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('hall_establishment_fee', function (Blueprint $table ){              
                 $table->increments('id');
                 $table->integer('user_id')->unsigned();
                 $table->integer('year');
                 $table->string('month');
                 $table->integer('hall_establishment_fee');
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
        Schema::drop('hall_establishment_fee');
    }
}
