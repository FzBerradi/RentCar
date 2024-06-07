<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $fillable = [
        'marque',
        'modele',
        'matricule',
        'photo',
        'carburant',
        'kilometrage',
        'prixJournee',
        'statut',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'Voiture_ID');
    }
}
