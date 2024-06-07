<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manager::create([
            'cin' => 'S123',
            'nom' => 'Berradi M2',
            'email' => 'FatiBe@manager.com',
            'password' => Hash::make('12345'),
        ]);
        Manager::create([
            'cin' => 'S123',
            'nom' => 'Benaouda M1',
            'email' => 'Salma@manager.com',
            'password' => Hash::make('12345'),
        ]);
        Manager::create([
            'cin' => 'S123',
            'nom' => 'Bamhaouch M3',
            'email' => 'FatiBam@manager.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
