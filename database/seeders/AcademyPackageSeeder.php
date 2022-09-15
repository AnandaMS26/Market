<?php

namespace Database\Seeders;

use App\Models\AcademyPackage;
use Illuminate\Database\Seeder;

class AcademyPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademyPackage::factory(5)->create();
    }
}
