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
        'user_id' => '1',
        'chat_id' => '1',
        'message' => 'よろしくお願いします',
        ]);
            DB::table('chats_messages')->insert([
        'id' => '2',
        'user_id' => '2',
        'chat_id' => '1',
        'message' => 'よろしくお願いします',
        ]);
          DB::table('chats_messages')->insert([
        'id' => '3',
        'user_id' => '3',
        'chat_id' => '2',
        'message' => 'よろしくお願いします',
        ]);
            DB::table('chats_messages')->insert([
        'id' => '4',
        'user_id' => '4',
        'chat_id' => '4',
        'message' => 'よろしくお願いします',
        ]);
           DB::table('chats_messages')->insert([
        'id' => '5',
        'user_id' => '4',
        'chat_id' => '8',
        'message' => 'よろしくお願いします',
        ]);
            DB::table('chats_messages')->insert([
        'id' => '6',
        'user_id' => '8',
        'chat_id' => '9',
        'message' => 'よろしくお願いします',
        ]);
          DB::table('chats_messages')->insert([
        'id' => '7',
        'user_id' => '9',
        'chat_id' => '10',
        'message' => 'よろしくお願いします',
        ]);
            DB::table('chats_messages')->insert([
        'id' => '8',
        'user_id' => '10',
        'chat_id' => '11',
        'message' => 'よろしくお願いします',
        ]);
          DB::table('chats_messages')->insert([
        'id' => '9',
        'user_id' => '11',
        'chat_id' => '12',
        'message' => 'よろしくお願いします',
        ]);
            DB::table('chats_messages')->insert([
        'id' => '10',
        'user_id' => '12',
        'chat_id' => '13',
        'message' => 'よろしくお願いします',
        ]);
    }
}
