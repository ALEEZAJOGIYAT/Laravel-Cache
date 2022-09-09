<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ILluminate\Support\Facades\Str;
use Faker\Factory as Faker;
use DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach (range(1,10000) as $value) {
            DB::table('users')->insert([
                'name' => $faker -> name,
                'email' => $faker ->email
            ]);
        }
        //
    }
}
