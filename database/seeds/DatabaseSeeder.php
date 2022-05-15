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
    $this->call(ChatmessageTableSeeder::class);
    $this->call(ChatTableSeeder::class);
    $this->call(CodTableSeeder::class);
    $this->call(DmTableSeeder::class);
    $this->call(ValorantTableSeeder::class);
}
}
