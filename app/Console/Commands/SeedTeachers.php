<?php

// In app/Console/Commands/SeedTeachers.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SeedTeachers extends Command
{
    // The name and signature of the console command
    protected $signature = 'seed:teachers';

    // The console command description
    protected $description = 'Seed 100 dummy records into the teachers table';

    // Execute the console command
    public function handle()
    {
        // Create an instance of Faker
        $faker = Faker::create();

        // Insert 100 dummy records into the teachers table
        for ($i = 0; $i < 100; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->info('100 teachers have been successfully seeded.');
    }
}

