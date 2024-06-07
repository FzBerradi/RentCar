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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Client_ID');
            $table->unsignedBigInteger('Voiture_ID');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->float('montant_ht');
            $table->float('tva');
            $table->float('montant_ttc');
            $table->boolean('statut');
            // Relations:
            $table->foreign('Client_ID')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('Voiture_ID')->references('id')->on('voitures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
