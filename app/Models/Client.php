<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class Client extends Model
{

    use HasFactory;
    protected $connection = 'mongodb';
    protected $fillable = [
        'cin',
        'nom',
        'adresse',
        'numTel',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'Client_ID');
    }

}
