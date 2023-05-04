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
        Schema::create('niveau__langues', function (Blueprint $table) {
            $table->increments('id');
            $table->char('Niveau', 2);
            $table->char('Duree_Cours_Normal', 20);
            $table->char('Duree_Cours_Soir', 20);
            $table->char('Duree_Cours_Accelerer', 20);
            $table->char('Duree_Cours_Rapide', 20);
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
        Schema::dropIfExists('niveau__langues');
    }
};
