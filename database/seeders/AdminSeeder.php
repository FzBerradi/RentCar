<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'cin' => 'S123456',
            'nom' => 'Salma Benaouda',
            'email' => 'Salma@admin.com',
            'password' => Hash::make('12345'),
        ]);
        Admin::create([
            'cin' => 'F123456',
            'nom' => 'Fatimazahra Bamhaouch',
            'email' => 'FatiBam@admin.com',
            'password' => Hash::make('12345'),
        ]);
        Admin::create([
            'cin' => 'B123456',
            'nom' => 'Fatimazohra Berradi',
            'email' => 'FatiBe@admin.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
