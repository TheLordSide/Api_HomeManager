<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $fillable = [
        'numero',
        'prix',
        'disponible',
        'demeure_id',
    ];

    protected $casts = [
        'disponible' => 'boolean',
    ];


    public function demeure()
    {
        return $this->belongsTo(Demeure::class);
    }
}
