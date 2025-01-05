<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();

        // foreach (range(1, 10) as $index) { 
        //     DB::table('teachers')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }


        Teacher::factory()->count(10)->create();
    }
}
