<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
        Schema::table('images',function (Blueprint $table){
            $table->integer('image_type_id')->unsigned();
            $table->foreign('image_type_id')->references('id')->on('image_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function($table)
        {
            $table->dropForeign(['image_type_id']);
        });
        Schema::dropIfExists('image_types');
    }
}
