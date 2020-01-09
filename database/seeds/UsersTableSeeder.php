<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
        	'name' => 'ade lukman',
        	'email' => 'adluk@exmaple.com',
        	'password' => Hash::make('rememberthat')
        ]);

        User::firstOrCreate([
        	'name' => 'Saefulloh Aziz',
        	'email' => 'Saziz@exmaple.com',
        	'password' => Hash::make('rememberthat')
        ]);
    }
}
