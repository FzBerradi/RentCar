<?php

namespace Database\Seeders;

use App\Models\Voiture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Voiture::factory(10)->create();
        Voiture::create([
            'marque' => 'Mercedes',
            'matricule' => 'A12345B',
            'modele' => 'Classe A',
            'carburant' => 'essence',
            'photo' => 'assets/img/featured1.png',
            'kilometrage' => 15212.2,
            'prixJournee' => 300,
            'statut' => 0,
        ]);
        Voiture::create([
            'marque' => 'Audi',
            'matricule' => 'B125C',
            'modele' => 'R6',
            'carburant' => 'essence',
            'photo' => 'assets/img/featured2.png',
            'kilometrage' => 15252.2,
            'prixJournee' => 450,
            'statut' => 0,
        ]);
        Voiture::create([
            'marque' => 'Jeep',
            'matricule' => 'R 15236 B',
            'modele' => 'Grand cherokee',
            'carburant' => 'essence',
            'photo' => 'assets/img/about-img.png',
            'kilometrage' => 25152.2,
            'prixJournee' => 600,
            'statut' => 0,
        ]);
        Voiture::create([
            'marque' => 'Range rover',
            'matricule' => 'Z 1253 B',
            'modele' => 'Evoque',
            'carburant' => 'essence',
            'photo' => 'assets/img/featured4.png',
            'kilometrage' => 15270,
            'prixJournee' => 750,
            'statut' => 0,
        ]);
        Voiture::create([
            'marque' => 'Mercedes',
            'matricule' => 'C 1475 G',
            'modele' => 'AMG',
            'carburant' => 'diesel',
            'photo' => 'assets/img/featured5.png',
            'kilometrage' => 48920,
            'prixJournee' => 987,
            'statut' => 0,
        ]);
    }
}
