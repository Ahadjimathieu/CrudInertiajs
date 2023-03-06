<?php

namespace App\Models;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auteur extends Model
{
    protected $fillable = [
        "nom",
        "prenom"
    ];
    use HasFactory;

    public function livres(): HasMany {
        return $this->hasMany(Livre::class);
    }
}
