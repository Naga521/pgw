<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
        'id' => 1,
        'name' => 'Teruya',
        'email'=> 'aaa@gmail.com',
        'password'=>Hash::make('12345678')
        ]);
          DB::table('users')->insert([
        'id' => 2,
        'name' => 'Teruya2',
        'email'=> 'bbb@gmail.com',
        'password'=>Hash::make('12345678')
        ]);
         DB::table('users')->insert([
        'id' => 3,
        'name' => 'Teruya3',
        'email'=> 'ccc@gmail.com',
        'password'=>Hash::make('12345678')
        ]);
        DB::table('users')->insert([
        'id' => 4,
        'name' => 'Teruya4',
        'email'=> 'ddd@gmail.com',
        'password'=>Hash::make('12345678')
        ]);
    }
}
