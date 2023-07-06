<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'ABSOLUT Vodka Original BAG Rare',
            'price' => 6.99,
            'image' => 'absolute.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'ABSOLUT Vodka Global Cooling Bottle BAG RARE WOW',
            'price' => 12.89,
            'image' => 'absolute.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Learn C programming Language VIDEO LESSON COURSE',
            'price' => 29.00,
            'image' => 'absolute.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Wordpress blog VIDEO online Tutorials COURCE Video Book',
            'price' => 29.00,
            'image' => 'absolute.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'SEO Search Engine Optimization VIDEO Tutorials Course',
            'price' => 39.00,
            'image' => 'absolute.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'SEO Video Course: How to get traffic and Google rating',
            'price' => 39.00,
            'image' => 'absolute.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
