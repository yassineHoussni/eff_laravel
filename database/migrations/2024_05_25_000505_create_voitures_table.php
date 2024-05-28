<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->string('matricule')->primary();
            $table->string('marque');
            $table->string('couleur');
            $table->date('dateMiseEnCirculation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
}
