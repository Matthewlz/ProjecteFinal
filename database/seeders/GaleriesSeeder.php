<?php

namespace Database\Seeders;

use App\Models\Galerie;
use Illuminate\Database\Seeder;

class GaleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Galerie::factory(25)->create();
    }
}
