<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'cin' => 'S123',
            'nom' => 'Salma client',
            'adresse' => 'Rabat, Agdal',
            'numTel' => '0612354698',
        ]);
        Client::create([
            'cin' => 'F123',
            'nom' => 'Fatimazahra Client',
            'adresse' => 'Rabat, Agdal',
            'numTel' => '0612354698',
        ]);
        Client::create([
            'cin' => 'FB123',
            'nom' => 'Fatimazohra Client',
            'adresse' => 'Rabat, Agdal',
            'numTel' => '0612354698',
        ]);
        Client::create([
            'cin' => 'FB123',
            'nom' => 'Fatimazohra Client',
            'adresse' => 'Rabat, Agdal',
            'numTel' => '0612354698',
        ]);
    }
}
