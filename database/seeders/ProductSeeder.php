<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Mediterranean Shrimp Pizza',
            'price' => 8.40,
            'is_enable' => '1',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza Margherita',
            'price' => 9.20,
            'is_enable' => '1',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza al Prosciutto',
            'price' => 7.35,
            'is_enable' => '1',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Mediterranean Shrimp Pizza',
            'price' => 8.40,
            'is_enable' => '1',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza Margherita',
            'price' => 9.20,
            'is_enable' => '1',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza al Prosciutto',
            'price' => 7.35,
            'is_enable' => '1',
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
        ]);
    }
}
