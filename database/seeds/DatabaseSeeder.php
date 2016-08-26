<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
      public function run()

    {

        $this->call(UsersTableSeeder::class);
    }
}


class UsersTableSeeder extends Seeder
{

    public function run()
    {

      \DB::table('users')->truncate();

      $u = \App\User::create([
        'name' => 'Ismael',
        'email' => 'ismaeldefreitas@ismael.com',
        'age' => '35',
        'password' => bcrypt(123456),

      ]);
        factory(\App\User::class, 100) ->create();
    }
}
