<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FixedLesson;

class FixedLessonsTableSeeder extends Seeder
{
    public function run(): void
    {
        FixedLesson::insert([
            [
                'title' => '木曜Aコース',
                'weekday' => 'Thursday',
                'start_time' => '17:00:00',
                'required_time' => 60,
                'capacity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '土曜Aコース',
                'weekday' => 'Saturday',
                'start_time' => '14:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '土曜6月maxコース',
                'weekday' => 'Saturday',
                'start_time' => '16:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
