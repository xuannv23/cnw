<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class FlowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i <10; $i++) { 
            DB::table('flowers')->insert([
                'name' => $faker->name,
                'description' => $faker->sentence,
                'image_url' => $faker->url,
            ]);
        }
    }
}
