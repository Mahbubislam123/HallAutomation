<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table ){              
                 $table->increments('id');
                 $table->string('building');
                 $table->integer('room_number')->unique();
                 $table->integer('bed_one');
                 $table->integer('bed_two');
                 $table->integer('bed_three');
                 $table->integer('bed_four');
                 
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
        Schema::drop('rooms');
    }
}
