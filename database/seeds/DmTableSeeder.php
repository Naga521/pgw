<?php

use Illuminate\Database\Seeder;

class DmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('dm')->insert([
        'id' => '1',
        'user_id' => '2',
        'to_id'=> '3',
        'message'=>'よろしくお願いします'
        ]);
           DB::table('dm')->insert([
        'id' => '2',
        'user_id' => '3',
        'to_id'=> '4',
        'message'=>'よろしくお願いします'
        ]);
    }
}
