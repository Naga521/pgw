<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $this->call(ApexTableSeeder::class);
    //$this->call(ChatmessageTableSeeder::class);
    $this->call(ChatsSeeder::class);
    $this->call(CodTableSeeder::class);
    $this->call(DmsTableSeeder::class);
    $this->call(ValorantTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(FollowsSeeder::class);
}
}
