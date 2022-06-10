<?php

use Illuminate\Database\Seeder;

class CodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('cod')->insert([
         'level' => '200',
        'rank' => 'ルーキー',
        'offer'=> '楽しくプレイ',
        ]);
          DB::table('cod')->insert([
         'level' => '200',
        'rank' => 'ルーキー',
        'offer'=> '楽しくプレイ',
        ]);
    }
}
