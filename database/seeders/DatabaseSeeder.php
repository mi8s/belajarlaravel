<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

{
    //Seed the application's database.

    public function run(): void
    {
        User::factory(10)->create();
        \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

        //batch with faker
        //set locale

        $faker = Faker::create(locale: 'id_ID');
        for ($i=1; $i <= 5; $i++)
        DB::table(table: 'users')->insert(values: [
            'name' => $faker->name,
            'email' => $faker->email, '@text.com',
            'password' => Hash::make(value: 'admin123')
        ]);
    }
}
