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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('logo')->nullable();
            $table->string('img')->nullable();
            $table->string('MotivaionName');
            $table->text('MotivaionBody');
            $table->text('objectifs')->nullable();
            $table->text('tp')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreignId('formation_sub_categories_id')
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
        Schema::dropIfExists('formations');
    }
};
