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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('serial');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('procesador');
            $table->string('ram');
            $table->string('disco');
            $table->string('so'); 
            $table->string('ip');
            $table->string('asignacion');
            $table->string('empleadoid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
