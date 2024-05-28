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
        Schema::create('utilisations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('matricule')->constrained('voitures')->onDelete('cascade');
            $table->foreignId('code_sal')->constrained('salaries')->onDelete('cascade');
            $table->date('date_debut_utilisation');
            $table->date('date_fin_utilisation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisations');
    }
};


