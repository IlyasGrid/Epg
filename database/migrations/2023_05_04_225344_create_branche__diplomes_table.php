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
        Schema::create('branche__diplomes', function (Blueprint $table) {
            $table->id();
            $table->char('Abreviation', 10);
            $table->char('Fullname', 150);
            $table->text('img')->nullable();
            $table->text('Motivation')->nullable();
            $table->integer('Price_month');
            $table->integer('Price_year');
            $table->text('Objectifs');
            $table->text('Prerequis');
            $table->text('Prespective_professionel')->nullable();
            $table->text('Piece_a_fournis')->nullable();
            $table->softDeletes();
            $table->foreignId('Diplome_id')
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
        Schema::dropIfExists('branche__diplomes');
    }
};
