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
        'id' => '1',
        'rank' => 'rookie',
        'offer'=> '楽しむ',
        ]);
          DB::table('cod')->insert([
        'id' => '2',
        'rank' => 'rookie',
        'offer'=> '楽しむ',
        ]);
    }
}
