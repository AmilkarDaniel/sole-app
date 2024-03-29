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
        Schema::create('images', function (Blueprint $table) {
            //Error al generar la llave primaria de id eliminando esta liena peujecutar la linea de $table->prymari
            // $table->id();
            $table->string('url', 75);
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            $table->timestamps();
            $table->primary(['imageable_id', 'imageable_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
