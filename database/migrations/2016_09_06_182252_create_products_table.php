<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productcode', 50);
            $table->string('productdescription');
            $table->string('eancode', 50);
            $table->integer('expiration');
            $table->string('mp1');
            $table->float('p1');
            $table->string('mp2');
            $table->float('p2');
            $table->string('mp3');
            $table->float('p3');
            $table->string('mp4');
            $table->float('p4');
            $table->string('mp5');
            $table->float('p5');
            $table->string('mp6');
            $table->float('p6');
            $table->float('density');
            $table->float('grammage');
            $table->string('tipobobina');
            $table->string('tratamento');
            $table->string('lados');
            $table->float('boblargura');
            $table->float('tollargbobmax');
            $table->float('tollargbobmin');
            $table->string('refilar');
            $table->integer('bobinasporvez');
            $table->float('thickness1');
            $table->float('tolespess1max');
            $table->float('tolespess1min');
            $table->float('thickness1');
            $table->float('tolespess2max');
            $table->float('tolespess2min');
            $table->float('sanfona');
            $table->float('tolsanfonamax');
            $table->float('tolsanfonamin');
            $table->string('impressao');
            $table->integer('cilindro');
            $table->string('cyrel1');
            $table->string('cyrel2');
            $table->string('cyrel3');
            $table->string('cyrel4');
            $table->string('cor1');
            $table->string('cor2');
            $table->string('cor3');
            $table->string('cor4');
            $table->string('cor5');
            $table->string('cor6');
            $table->string('cor7');
            $table->string('cor8');
            $table->string('modelosaco');
            $table->string('ziper');
            $table->integer('nziper');
            $table->string('solda');
            $table->string('cortarporvez');
            $table->float('largboca');
            $table->float('tollargbocamax');
            $table->float('tollargbocamin');
            $table->float('comprimento');
            $table->float('tolcomprmax');
            $table->float('tolcomprmin');
            $table->float('sacoespess');
            $table->float('tolsacoespessmax');
            $table->float('tolsacoespessmin');
            $table->string('microperfurado');
            $table->string('estampado');
            $table->string('estampar');
            $table->string('laminado');
            $table->string('laminar');
            $table->string('bolha');
            $table->string('bolhar');
            $table->string('isolmanta');
            $table->string('isolmantar');
            $table->string('colagem');
            $table->string('dinas');
            $table->float('sanfcorte');
            $table->float('tolsanfcortemax');
            $table->float('tolsanfcortemin');
            $table->float('aba');
            $table->float('tolabamax');
            $table->float('tolabamin');
            $table->integer('amarrar');
            $table->integer('qtdpcbobbolha');
            $table->integer('fatiar');
            $table->integer('qtdpcbobmanta');
            $table->string('bolhafilm1');
            $table->string('bolhafilm2');
            $table->string('bolhafilm3');
            $table->string('bolhafilm4');
            $table->integer('pacote');
            $table->text('embalagem');
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
        Schema::dropIfExists('products');
    }
}
