<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketsTableSeeder extends Seeder
{
    public function run(): void
    {
        // ReservationsTableSeederで作成した順にreservation_idが割り当てられる想定

        // 木曜Aコース（fixed_lesson_id:1, lesson_id:1）
        Ticket::create([
            'student_serial_num' => 1,
            'reservation_id' => 1,
            'status' => 'used',
            'used_at' => now(),
        ]);
        Ticket::create([
            'student_serial_num' => 2,
            'reservation_id' => 2,
            'status' => 'used',
            'used_at' => now(),
        ]);
        Ticket::create([
            'student_serial_num' => 3,
            'reservation_id' => 3,
            'status' => 'used',
            'used_at' => now(),
        ]);

        // 土曜Aコース（fixed_lesson_id:2, lesson_id:2,3）
        Ticket::create([
            'student_serial_num' => 4,
            'reservation_id' => 4,
            'status' => 'used',
            'used_at' => now(),
        ]);
        Ticket::create([
            'student_serial_num' => 4,
            'reservation_id' => 5,
            'status' => 'used',
            'used_at' => now(),
        ]);

        // 土曜6月maxコース（fixed_lesson_id:3, lesson_id:4,5,6）
        Ticket::create([
            'student_serial_num' => 5,
            'reservation_id' => 6,
            'status' => 'used',
            'used_at' => now(),
        ]);
        Ticket::create([
            'student_serial_num' => 5,
            'reservation_id' => 7,
            'status' => 'used',
            'used_at' => now(),
        ]);
        Ticket::create([
            'student_serial_num' => 5,
            'reservation_id' => 8,
            'status' => 'used',
            'used_at' => now(),
        ]);
    }
}
