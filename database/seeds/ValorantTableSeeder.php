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
         'level' => '100',
        'rank' => 'ブロンズ',
        'offer'=> '楽しくプレイ',
        ]);
          DB::table('valorants')->insert([
         'level' => '100',
        'rank' => 'ブロンズ',
        'offer'=> '楽しくプレイ',
        ]);
    }
}
