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
        \App\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('12345678'),
            'email' => 'admin@gmail.com',
        ]);
    }
}
