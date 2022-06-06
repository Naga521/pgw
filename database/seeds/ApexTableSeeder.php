<?php

use Illuminate\Database\Seeder;

class ApexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apexes')->insert([
        'id' => '1',
        'level' => '100',
        'battle_royale_rank' => 'ブロンズ',
        'arena_rank' => 'ブロンズ',
        'offer'=> '楽しくプレイ',
        ]);
        DB::table('apexes')->insert([
        'id' => '2',
         'level' => '100',
        'battle_royale_rank' => 'ブロンズ',
        'arena_rank' => 'ブロンズ',
        'offer'=> '楽しくプレイ',
        ]);
    }
}
