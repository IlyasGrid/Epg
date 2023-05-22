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
            $table->string('Name')->unique();
            $table->string('Subtitle');
            $table->text('Motivation');
            $table->text('img')->nullable();
            $table->text('Raisons')->nullable();
            $table->text('Piece_frais')->nullable();
            $table->text('Conditions_Etudes')->nullable();
            $table->text('Conditions_Formations')->nullable();
            $table->text('Conditions_Cherche_Emploi')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
