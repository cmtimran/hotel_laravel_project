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

        {
            User::create([

        User::create(
            ['id'=>'1','name'=>'Ahmed Eltaron','email'=>'Ahmed-eltaron@hotel.com','password'=>'0123456789','created_at'=>'2020-10-26 15:28:33','updated_at'=>'2020-10-26 15:28:33'],
            ['id'=>'2','name'=>'Aya Sakr','email'=>'Aya-sakr@hotel.com','password'=>'0123456789','created_at'=>'2020-10-26 15:28:33','updated_at'=>'2020-10-26 15:28:33'],
            ['id'=>'3','name'=>'Heba Essam','email'=>'Heba-Essam@hotel.com','password'=>'0123456789','created_at'=>'2020-10-26 15:28:33','updated_at'=>'2020-10-26 15:28:33']),
            ]);}
    }
}
