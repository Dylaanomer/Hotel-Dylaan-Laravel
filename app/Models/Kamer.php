<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamer extends Model
{
    use HasFactory;

    protected $table = 'kamers';
    public $timestamps = true;

    protected $casts = [
        'prijs' => 'float'
    ];

    protected $fillable = [
        'naam',
        'description',
        'prijs',
        'adress',
        'type-kamer',
        'Aantal-personen',
        'minibar',
        'created_at',
        'updated-at'
    ];
}
