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
        Schema::create('tarification__langues', function (Blueprint $table) {
            $table->id();
            $table->char('Type', 100);
            $table->integer('Volume_Horraire');
            $table->char('Temps', 10);
            $table->integer('Price');
            $table->softDeletes();
            $table->foreignId('langue_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarification__langues');
    }
};
