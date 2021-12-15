<?php

namespace Database\Seeders;

use App\Models\Atelier;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recette;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(15)
            ->create();

        Atelier::factory()
            ->count(10)
            ->create();

        Recette::factory()
            ->count(10)
            ->create();

        Ingredient::factory()
            ->count(5)
            ->create();
    }
}
