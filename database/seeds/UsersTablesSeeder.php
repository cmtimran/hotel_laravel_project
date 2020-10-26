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
            for($i=0;$i<=100;$i++)
        {
            User::create([
                'name'  => Str::random(10),
                'email' =>$this->faker->unique()->safeEmail,
                'password' => Hash::make('password'),

            ]);}
    }
}
