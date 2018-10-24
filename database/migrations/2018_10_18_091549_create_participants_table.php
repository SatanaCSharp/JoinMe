<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_participated')->default(false);
            $table->timestamps();
        });
        Schema::table('participants',function (Blueprint $table){
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
        });
        Schema::table('participants',function (Blueprint $table){
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
        Schema::table('participants', function($table)
        {
            $table->dropForeign(['event_id','user_id']);
        });
        Schema::dropIfExists('participants');
    }
}
