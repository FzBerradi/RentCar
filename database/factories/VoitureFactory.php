<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marque' => $this->faker->randomElement(['Alvera', 'Belario', 'Carmine', 'Dynacore']), // Marques fictives
            'matricule' => $this->faker->regexify('[A-Z]{2}-[0-9]{3}-[A-Z]{2}'), // Plaque d'immatriculation fictive
            'modele' => $this->faker->bothify('Modèle ##??'), // Modèles générés aléatoirement
            'carburant' => $this->faker->randomElement(['essence', 'diesel', 'électrique', 'hybride']), // Types de carburant
            'photo' => fake()->imageUrl(),
            'kilometrage' => $this->faker->numberBetween(0, 30000), // Kilométrage généré aléatoirement,
            'prixJournee' => $this->faker->numberBetween(200, 500),
            'statut' => 0,
        ];
    }
}
