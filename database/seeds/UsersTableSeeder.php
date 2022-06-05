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
        'password'=>Hash::make('12345678'),
        'apex_user_id'=>1,
        'valorant_user_id'=>1,
        'cod_user_id'=>1,
        ]);
          DB::table('users')->insert([
        'id' => 2,
        'name' => 'Teruya2',
        'email'=> 'bbb@gmail.com',
        'password'=>Hash::make('12345678'),
        'apex_user_id'=>2,
        'valorant_user_id'=>2,
        'cod_user_id'=>2,
        ]);
         DB::table('users')->insert([
        'id' => 3,
        'name' => 'Teruya3',
        'email'=> 'ccc@gmail.com',
        'password'=>Hash::make('12345678'),
        'apex_user_id'=>3,
        'valorant_user_id'=>3,
        'cod_user_id'=>3,
        ]);
        DB::table('users')->insert([
        'id' => 4,
        'name' => 'Teruya4',
        'email'=> 'ddd@gmail.com',
        'password'=>Hash::make('12345678'),
        'apex_user_id'=>4,
        'valorant_user_id'=>4,
        'cod_user_id'=>4,
        ]);
    }
}
