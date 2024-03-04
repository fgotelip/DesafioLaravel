<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Helfcareplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'discount',
    ];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    
}
