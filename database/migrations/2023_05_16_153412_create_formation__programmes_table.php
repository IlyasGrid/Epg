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
        Schema::create('formation__programmes', function (Blueprint $table) {
            $table->id();
            $table->string('ModuleName');
            $table->text('ModuleChapitre');
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
        Schema::dropIfExists('formation__programmes');
    }
};
