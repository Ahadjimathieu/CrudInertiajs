<?php

namespace App\Models;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    protected $fillable = [
        "libelle"
    ];
    use HasFactory;

    public function livres():HasMany {
        return $this->hasMany(Livre::class);
    }
}
