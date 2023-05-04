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
        Schema::create('langues', function (Blueprint $table) {
            $table->id();
            $table->char('Name')->unique();
            $table->string('Subtitle',50);
            $table->text('Motivation');
            $table->text('Raisons')->nullable();
            $table->text('Piece_frais')->nullable();
            $table->text('Conditions_Etudes')->nullable();
            $table->text('Conditions_Formations')->nullable();
            $table->text('Conditions_Cherche_Emploi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langues');
    }
};
