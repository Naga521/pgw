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
        'room_name'=> '部屋1',
        ]);
           DB::table('chats')->insert([
        'room_name'=> '部屋2',
        ]);
    }
}

    