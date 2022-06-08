<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            [
                'category_id' => '1',
                'user_id' => '1',
                'title' => 'デート',
                'place' => '那覇市久茂地レストラン',
                'description' => '彼女と18時からフレンチレストランで記念日デート。',
                'date' => '2022/06/11'
            ],
            [
                'category_id' => '2',
                'user_id' => '1',
                'title' => '打合せ',
                'place' => '那覇市銘苅オフィス',
                'description' => '先方と商品開発について打合せ。',
                'date' => '2022/06/20'
            ],
            [
                'category_id' => '4',
                'user_id' => '1',
                'title' => '夕食の買い出しに行く',
                'place' => 'スーパー',
                'description' => '冷蔵庫が空っぽ。',
                'date' => '2022/06/15'
            ]
        ]);
    }
}
