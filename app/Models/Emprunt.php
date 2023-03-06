<?php

namespace App\Models;

use App\Models\Livre;
use App\Models\Adherant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emprunt extends Model
{
    protected $fillable = [
        "date_emprunt",
        "date_retour",
        "adherant_id",
        "livre_id"
    ];
    use HasFactory;

    public function adherant(){
        return $this->belongsTo(Adherant::class);
    }
    public function livre(){
        return $this->belongsTo(Livre::class);
    }
}
