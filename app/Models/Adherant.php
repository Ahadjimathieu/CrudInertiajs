<?php

namespace App\Models;

use App\Models\Emprunt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adherant extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "password"
    ];
    use HasFactory;

    public function emprunts() : HasMany{
        return $this->hasMany(Emprunt::class);
    }
}
