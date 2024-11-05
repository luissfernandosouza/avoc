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
    Schema::create('motoristas', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('cpf', 11)->unique();
        $table->string('telefone', 15);
        $table->string('n_registro', 11)->unique();
        $table->string('cat_hab', 2);
        $table->string('primeira_cnh', 10);
        $table->string('validade_cnh', 20);
        $table->string('data_emissao', 10);
        $table->string('data_nascimento', 11);
        $table->string('org_emissor', 10);
        $table->string('email')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motoristas');
    }
};
