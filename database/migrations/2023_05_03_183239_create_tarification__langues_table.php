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
             $table->increments('id');
            $table->char('Type',100);
            $table->char('Volume_Horraire',50);
            $table->char('Temps',10);
            $table->char('Price',10);    
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
