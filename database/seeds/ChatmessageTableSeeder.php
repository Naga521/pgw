<?php

use Illuminate\Database\Seeder;

class ChatmessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('chats_messages')->insert([
        'id' => '1',
        'chats_id' => '2',
        'user_id' => '3',
        'room_id' => '4',
        'message' => 'よろしくお願いします',
        ]);
            DB::table('chats_messages')->insert([
        'id' => '2',
        'chats_id' => '3',
        'user_id' => '4',
        'room_id' => '5',
        'message' => 'よろしくお願いします',
        ]);
    }
}
