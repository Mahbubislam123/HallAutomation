<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Billinformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billinformations', function (Blueprint $table ){              
                 $table->increments('id');
                 $table->integer('user_id')->unsigned();
                 $table->string('name');
                 $table->string('email')->unique();
                 $table->integer('registration_number');
                 $table->integer('hall_entry_fee');
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
        Schema::drop('billinformations');
    }
}
