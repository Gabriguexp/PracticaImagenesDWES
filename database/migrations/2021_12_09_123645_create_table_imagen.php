<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen', function (Blueprint $table) {
            $table->id();
            $table ->bigInteger('idempleado')->unsigned()->nullable();
            $table->string('nombre', 100);
            $table->string('nombreoriginal', 200);
            $table->string('nuevonombre', 200);
            $table->string('mimetype', 200);
            $table->foreign('idempleado')->references('id')->on('empleado')->onDelete('cascade');
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
        Schema::dropIfExists('imagen');
    }
}
