<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Student;
// use App\Models\User;

class StudentsTableSeeder extends Seeder {
    public function run(): void {

        Student::create([
            'serial_num' => 1, // students.serial_num（bigIncrements）を参照
            'id' => "aabb0001",
            'name' => '山田 花子',
            'password' => Hash::make('password123'), // 平文のパスワードをハッシュ化
            'fixed_lesson_id' => 1, // FixedessonsTableSeederの外部キー
        ]);

        Student::create([
            'serial_num' => 2, // students.serial_num（bigIncrements）を参照
            'id' => "abcd0002",
            'name' => '山田 太郎',
            'password' => Hash::make('password123'), // 平文のパスワードをハッシュ化
            'fixed_lesson_id' => 1,
        ]);
        Student::create([
            'serial_num' => 3, // students.serial_num（bigIncrements）を参照
            'id' => "abcd0003",
            'name' => '佐藤 次郎',
            'password' => Hash::make('password002'), // 平文のパスワードをハッシュ化
            'fixed_lesson_id' => 1,
        ]);
        Student::create([
            'serial_num' => 4, // students.serial_num（bigIncrements）を参照
            'id' => "abcd0004",
            'name' => '鈴木 四郎',
            'password' => Hash::make('password003'), // 平文のパスワードをハッシュ化
            'fixed_lesson_id' => 2,
        ]);
        Student::create([
            'serial_num' => 5, // students.serial_num（bigIncrements）を参照
            'id' => "abcd0005",
            'name' => '田中 五郎',
            'password' => Hash::make('password004'), // 平文のパスワードをハッシュ化
            'fixed_lesson_id' => 3,
        ]);
    }
}
