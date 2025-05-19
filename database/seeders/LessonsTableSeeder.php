<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LessonsTableSeeder extends Seeder
{
    public function run(): void
    {
        $lessons = [

            // 定期授業（木曜Aコース）
            [
                'title' => '木曜Aコース',
                'date' => '2025-06-06',
                'start_time' => '17:00:00',
                'required_time' => 60,
                'capacity' => 3,
                'weekday' => 'Thursday',
                'fixed_lesson_id' => 1,
            ], 
            // 定期授業（土曜Aコース）
            [
                'title' => '土曜Aコース',
                'date' => '2025-06-01',
                'start_time' => '14:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'weekday' => 'Saturday',
                'fixed_lesson_id' => 2,
            ],
            [
                'title' => '土曜Aコース',
                'date' => '2025-06-08',
                'start_time' => '14:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'weekday' => 'Saturday',
                'fixed_lesson_id' => 2,
            ],

            // 定期授業（土曜6月maxコース）
            // 月ごとの開催上限まで作成したレッスン
            // lesson_limits=3を超えないように制限されているかを確認するために作成
            [
                'title' => '土曜6月maxコース',
                'date' => '2025-06-1',
                'start_time' => '14:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'weekday' => 'Saturday',
                'fixed_lesson_id' => 3,
            ],
            [
                'title' => '土曜6月maxコース',
                'date' => '2025-06-15',
                'start_time' => '14:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'weekday' => 'Saturday',
                'fixed_lesson_id' => 3,
            ],
            [
                'title' => '土曜6月maxコース',
                'date' => '2025-06-22',
                'start_time' => '14:00:00',
                'required_time' => 60,
                'capacity' => 2,
                'weekday' => 'Saturday',
                'fixed_lesson_id' => 3,
            ],

            // 過去の日付の授業(チケット払い戻し不可の確認のため)
            [
                'title' => '過去授業',
                'date' => '2025-05-01',
                'start_time' => '17:00:00',
                'required_time' => 60,
                'capacity' => 3,
                'weekday' => 'Thursday',
                'fixed_lesson_id' => 1,
            ],
        ];

        foreach ($lessons as $lesson) {
            DB::table('lessons')->insert([
                ...$lesson,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
