<?php

use Illuminate\Database\Seeder;

class FollowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follow_users')->insert([
  'following_user_id' => 1,
  'followed_user_id' => 2,
   ]);
   
   DB::table('follow_users')->insert([
  'following_user_id' => 1,
  'followed_user_id' => 3,
   ]);
    }
}
