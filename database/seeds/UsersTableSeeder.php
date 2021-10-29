<?php

use App\User;
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
            'name'     => "Marcelo",
            'email'    => 'ambaza@gmail.com',
            'password' => bcrypt('bar'),
            'role'     => 'admin',
            'active'   => 1,
            'verified' => 1,
        ]);

        DB::table('users')->insert([
            'name'     => "Nobel",
            'email'    => 'nobel@gmail.com',
            'password' => bcrypt('bar'),
            'role'     => 'employee',
            'active'   => 1,
            'verified' => 1,
        ]);

    }
}
