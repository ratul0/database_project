<?php

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@sust.edu',
                'password' => Hash::make('1'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ]

        ];

        DB::table('admin')->insert($users);
    }
}