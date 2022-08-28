<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\CurriculumSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CurriculumSeeder::class);
    }
}
