<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $fillable = [
        'Client_ID',
        'Voiture_ID',
        'date_debut',
        'date_fin',
        'montant_ht',
        'tva',
        'montant_ttc',
        'statut',
    ];

    public function voiture()
    {
        return $this->belongsTo(Voiture::class, 'Voiture_ID');
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'Client_ID');
    }
}
