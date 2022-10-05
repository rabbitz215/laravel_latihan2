<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Major::truncate();
        $majors = ['Informatika', 'Ilmu Komunikasi', 'Sastra Inggris', 'VCDM'];
        foreach ($majors as $key => $major) {
            Major::create([
                "name" => $major,
                "description" => "Jurusan $major"
            ]);
        }
    }
}
