<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Talla::factory(20)->create();
    }
}
