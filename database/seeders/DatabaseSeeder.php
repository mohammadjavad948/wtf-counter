<?php

namespace Database\Seeders;

use App\Models\Wtf;
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
        Wtf::factory(5)->create();
    }
}
