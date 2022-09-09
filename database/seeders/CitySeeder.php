<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ILluminate\Support\Facades\Str;
use DB;
use Faker\Factory as Faker;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach (range(1,1000000) as $value){
            DB::table('city')->insert([
                'city' => $faker->city,
                'country' => $faker->country,
            ]);
        }

        //
    }
}
