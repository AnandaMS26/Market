<?php

namespace Database\Seeders;

use App\Models\SilabusPackage;
use Illuminate\Database\Seeder;

class SilabusPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SilabusPackage::create([
            'academy_package_id'=>1,
            'silabus_title' => 'Coding',
            'silabus_time' => '10',
            'silabus_lesson' => '5',
        ]);

        SilabusPackage::create([
            'academy_package_id'=>2,
            'silabus_title' => 'Design',
            'silabus_time' => '4',
            'silabus_lesson' => '2',
        ]);
    }
}
