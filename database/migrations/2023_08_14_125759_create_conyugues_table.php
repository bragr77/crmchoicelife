<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conyugues', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->unsigned();

            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('genero')->nullable();
            $table->string('fechan')->nullable();
            $table->string('estatus')->nullable();
            $table->string('ssn')->nullable();

            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conyugues');
    }
};
