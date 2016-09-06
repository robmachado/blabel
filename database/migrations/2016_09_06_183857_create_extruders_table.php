<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrudersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extruders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('op_id')->unsigned();
            $table->integer('serial');
            $table->float('quantity');
            $table->integer('unit_id')->unsigned();
            $table->float('netweight');
            $table->float('grossweight');
            $table->string('source');
            $table->string('operator');
            $table->timestamp('added_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extruders');
    }
}
