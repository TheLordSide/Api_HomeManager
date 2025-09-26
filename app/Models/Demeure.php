<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demeure extends Model
{
    protected $fillable = [
        'nom',
        'adresse',
        'charges',
        'user_id',
    ];

    protected $casts = [
        'charges' => 'array',
    ];

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
