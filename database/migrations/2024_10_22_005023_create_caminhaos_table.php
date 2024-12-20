<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('caminhoes', function (Blueprint $table) {
        $table->id();
        $table->string('modelo');
        $table->string('placa', 7)->unique();
        $table->integer('ano_fabricacao');
        $table->integer('ano_modelo');
        $table->string('cor', 50);
        $table->string('Renavan', 20)->unique();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caminhoes');
    }
};

