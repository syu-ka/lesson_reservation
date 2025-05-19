<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationsTableSeeder extends Seeder
{
    public function run(): void
    {
        // 木曜Aコース（fixed_lesson_id:1, lesson_id:1）
        Reservation::create([
            'student_serial_num' => 1,
            'lesson_id' => 1,
            'status' => 'reserved',
        ]);
        Reservation::create([
            'student_serial_num' => 2,
            'lesson_id' => 1,
            'status' => 'reserved',
        ]);
        Reservation::create([
            'student_serial_num' => 3,
            'lesson_id' => 1,
            'status' => 'reserved',
        ]);

        // 土曜Aコース（fixed_lesson_id:2, lesson_id:2,3）
        Reservation::create([
            'student_serial_num' => 4,
            'lesson_id' => 2,
            'status' => 'reserved',
        ]);
        Reservation::create([
            'student_serial_num' => 4,
            'lesson_id' => 3,
            'status' => 'reserved',
        ]);

        // 土曜6月maxコース（fixed_lesson_id:3, lesson_id:4,5,6）
        Reservation::create([
            'student_serial_num' => 5,
            'lesson_id' => 4,
            'status' => 'reserved',
        ]);
        Reservation::create([
            'student_serial_num' => 5,
            'lesson_id' => 5,
            'status' => 'reserved',
        ]);
        Reservation::create([
            'student_serial_num' => 5,
            'lesson_id' => 6,
            'status' => 'reserved',
        ]);
    }
}
