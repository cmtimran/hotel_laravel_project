<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Eloquent\model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Ahmed Eltaron','email'=>'Ahmed-eltaron@hotel.com','password'=>'0123456789']);
        User::create(['name'=>'Aya Sakr','email'=>'Aya-sakr@hotel.com','password'=>'0123456789']);
        User::create(['name'=>'Heba Essam','email'=>'Heba-Essam@hotel.com','password'=>'0123456789']);
    }
}
