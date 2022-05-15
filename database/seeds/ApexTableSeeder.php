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
        DB::table('apex')->insert([
        'id' => '1',
        'battle_royale_rank' => 'bronze',
        'arena_rank' => 'bronze',
        'offer'=> '楽しむ',
        ]);
        DB::table('apex')->insert([
        'id' => '2',
        'battle_royale_rank' => 'bronze',
        'arena_rank' => 'bronze',
        'offer'=> '楽しむ',
        ]);
    }
}
