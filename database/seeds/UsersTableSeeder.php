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
        App\User::create([
            'name' => 'Chinmay Anand',
            'email' => 'chinmayanand896@gmail.com',
            'password' => bcrypt('Chinmay1234')
        ]);
    }
}
