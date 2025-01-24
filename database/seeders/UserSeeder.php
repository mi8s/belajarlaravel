<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //insert satu data
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@test.com',
        //     'password' => Hash::make('admin12345'),
        // ]);

        //batch
        // for($i=1; $i <=10 ; $i++){
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@test.com',
        //     'password' => Hash::make('admin12345'),
        // ]);
        // }

    //batch with faker
    $faker = Faker::create(locale: 'id_ID');
    for ($i=1; $i <= 5; $i++)
        DB::table(table: 'users')->insert(values: [
            'name' => $faker->name,
            'email' => $faker->email, '@text.com',
            'password' => Hash::make(value: 'admin12345')
        ]);
    } 
}