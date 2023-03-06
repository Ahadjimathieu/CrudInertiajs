<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\User;
use App\Models\Livre;
use App\Models\Auteur;
use App\Models\Adherant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Auteur::factory(10)->create();
        $type1 = Type::factory()->create([
            'libelle' => 'Narratif',
        ]);
        $type2 = Type::factory()->create([
            'libelle' => 'Poeme',
        ]);
        $type3 = Type::factory()->create([
            'libelle' => 'Théâtre',
        ]);
        $type4 = Type::factory()->create([
            'libelle' => 'Epistolaire',
        ]);
        $type5 = Type::factory()->create([
            'libelle' => 'Argumentatif',
        ]);
        $type6 = Type::factory()->create([
            'libelle' => 'Developpement personnel',
        ]);
        Livre::factory(10)->create();
        Adherant::factory(10)->create();
    }
}
