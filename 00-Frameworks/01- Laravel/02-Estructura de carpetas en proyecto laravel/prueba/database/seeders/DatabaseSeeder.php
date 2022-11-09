<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        curso::factory(50)->create();
    }
}
