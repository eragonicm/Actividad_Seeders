<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for ($i=0;$i<=3000;$i++){
        User::create([
            'names' => $faker->name,
            'lastnames' => $faker->lastName,
            'email' => $faker->email,
            'address' => $faker->address,
        ]);
        }
    }
}
