<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        //
        factory(App\User::class, 10)->create();
        factory(App\User::class)->create([
           'username' => 'andres',
            'email' => 'ramirezandres1994@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'role' => 'admin'
        ]);

    }
}
