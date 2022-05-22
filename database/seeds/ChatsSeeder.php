<?php

use Illuminate\Database\Seeder;

class ChatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('chats')->insert([
        'id' => '1',
        'chat_id' => '2',
        'room_name'=> '部屋1',
        ]);
           DB::table('chats')->insert([
        'id' => '2',
        'chat_id' => '3',
        'room_name'=> '部屋2',
        ]);
    }
}
