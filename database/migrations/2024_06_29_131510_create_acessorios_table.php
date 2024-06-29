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
        Schema::create('acessorios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipoItem',100);
            $table->decimal('preco', total: 10, places: 2);
            $table->string('material',100);
            $table->string('cor',100);
            $table->string('tamanho',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acessorios');
    }
};
