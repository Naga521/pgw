<?php

use Illuminate\Database\Seeder;

class ValorantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valorants')->insert([
        'id' => '1',
         'level' => '100',
        'rank' => 'ブロンズ',
        'offer'=> '楽しくプレイ',
        ]);
          DB::table('valorants')->insert([
        'id' => '2',
         'level' => '100',
        'rank' => 'ブロンズ',
        'offer'=> '楽しくプレイ',
        ]);
    }
}
