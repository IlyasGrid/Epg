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
        Schema::create('formation__tarifications', function (Blueprint $table) {
            $table->id();
            $table->char('Name', 100);
            $table->integer('Price');
            $table->char('Type', 100);
            $table->integer('Volume_Horraire');
            $table->string('Duree_formation')->nullable();
            $table->string('Debut_formation');
            $table->string('Deroulement')->nullable();
            $table->string('Horraire');
            $table->string('Dernier_Delais_Inscription')->nullable();
            $table->string('repartition_heures')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('formations_id')
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
        Schema::dropIfExists('formation__tarifications');
    }
};
