<?php

use App\Models\Keyword;
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
        \App\Models\User::create([
            'name' => 'Tomas',
            'email' => 'tleffew1994@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);

        \App\Models\User::create([
            'name' => 'CJ',
            'email' => 'cj@aol.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
