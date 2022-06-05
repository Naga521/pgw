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
        'rank' => 'bronze',
        'offer'=> '楽しむ',
        ]);
          DB::table('valorants')->insert([
        'id' => '2',
        'rank' => 'bronze',
        'offer'=> '楽しむ',
        ]);
    }
}
