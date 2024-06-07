<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('marque', 30);
            $table->string('matricule', 80);
            $table->string('modele', 70);
            $table->string('carburant', 30);
            $table->string('photo', 255);
            $table->float('kilometrage');
            $table->float('prixJournee');
            $table->boolean('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
