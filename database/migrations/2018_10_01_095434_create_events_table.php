<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('date_time');
            $table->timestamps();
        });
        Schema::table('events',function (Blueprint $table){
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');
        });
        Schema::table('events',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function($table)
        {
            $table->dropForeign(['address_id','user_id']);
        });
        Schema::dropIfExists('events');
    }
}
