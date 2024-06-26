<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flower_id = DB::table("flowers")->pluck("flower_id")->toArray();
        if (empty($flower_id)) {
            return;
        }
        $faker = Faker::create();
        
        for ($i=0; $i <10; $i++) { 
            DB::table('regions')->insert([
                'flower_id' => $faker->randomElement($flower_id),
                'region_name' => $faker->name,
            ]);
        }
    }
}
