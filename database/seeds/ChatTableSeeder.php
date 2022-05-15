<?php

use Illuminate\Database\Seeder;

class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('chat')->insert([
        'id' => '1',
        'chat_id' => '2',
        'room_name'=> '部屋1',
        ]);
           DB::table('chat')->insert([
        'id' => '2',
        'chat_id' => '3',
        'room_name'=> '部屋2',
        ]);
    }
}
