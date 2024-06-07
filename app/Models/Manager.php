<?php

namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Manager extends Authenticatable
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $fillable = [
        'cin',
        'nom',
        'email',
        'password',
    ];
}
