<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opnumber');
            $table->integer('prod_id')->unsigned();
            $table->string('productcode', 50);
            $table->string('productdescription');
            $table->string('clientname', 60);
            $table->string('buyerid', 100);
            $table->string('purchaseorder', 60);
            $table->integer('salesorder');
            $table->datetime('deadline');
            $table->string('machine', 40);
            $table->string('matriz', 10);
            $table->float('qtymp1');
            $table->float('qtymp1ind');
            $table->float('qtymp2');
            $table->float('qtymp2ind');
            $table->float('qtymp3');
            $table->float('qtymp3ind');
            $table->float('qtymp4');
            $table->float('qtymp4ind');
            $table->float('qtymp5');
            $table->float('qtymp5ind');
            $table->float('qtymp6');
            $table->float('qtymp6ind');
            $table->float('netweight');
            $table->float('weightperthousand');
            $table->float('coilweight');
            $table->float('quantity');
            $table->integer('unit_id')->unsigned();
            $table->integer('bolbobinas');
            $table->integer('metreage');
            $table->integer('contadordif');
            $table->integer('isobobinas');
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
        Schema::dropIfExists('ops');
    }
}
