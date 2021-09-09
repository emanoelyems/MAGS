<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postos', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cell');
            $table->string('tel')->nullable();
            $table->string('address');
            $table->string('bomba');
            $table->string('bico');
            $table->string('turno');
            $table->string('cicloTurno');
            $table->timestamps();
            //falta: contrato_id e gerente_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postos');
    }
}
