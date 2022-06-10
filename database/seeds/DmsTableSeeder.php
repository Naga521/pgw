<?php

use Illuminate\Database\Seeder;

class DmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('dms')->insert([
        'user_id' => '2',
        'to_id'=> '3',
        'message'=>'よろしくお願いします',
        'created_at'=>now(),
        ]);
           DB::table('dms')->insert([
        'user_id' => '3',
        'to_id'=> '4',
        'message'=>'よろしくお願いします',
        'created_at'=>now(),
        ]);
        DB::table('dms')->insert([
        'user_id' => '3',
        'to_id'=> '2',
        'message'=>'よろしくお願いします！！！',
        'created_at'=>now(),
        ]);
    }
}
