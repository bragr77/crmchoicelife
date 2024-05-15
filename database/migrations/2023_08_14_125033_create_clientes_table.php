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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();

            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('genero')->nullable();
            $table->string('fechan')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable(); //
            $table->string('condado')->nullable(); //
            $table->string('estado')->nullable(); //
            $table->string('postal')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('estatus')->nullable();
            $table->string('ssn')->nullable();
            $table->string('estadocivil')->nullable();
            $table->string('ingreso')->nullable();
            $table->string('banco')->nullable();
            $table->string('ruta')->nullable();
            $table->string('cuenta')->nullable();
            $table->string('dependientes')->nullable();
            $table->integer('activo')->nullable();
            $table->integer('perfil')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
