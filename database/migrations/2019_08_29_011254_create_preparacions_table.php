<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreparacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preparacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->float('cantidad');
            $table->float('precio');
            $table->unsignedBigInteger('unidad_id');

            $table->foreign('unidad_id')->references('id')->on('unidads');
            
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
        Schema::dropIfExists('preparacions');
    }
}
