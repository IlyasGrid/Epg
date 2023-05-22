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
        Schema::create('programe__branches', function (Blueprint $table) {
            $table->id();
            $table->string('Name_module');
            $table->char('Annee', 20);
            $table->softDeletes();
            $table->foreignId('branche__diplomes_id')
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
        Schema::dropIfExists('programe__branches');
    }
};
