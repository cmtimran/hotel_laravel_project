<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Eloquent\model;
use Illuminate\Support\Str;



class CustomersTablesSeeder extends Seeder
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
        Customer::create([
            'name'  => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => Str::random(20),
            'nationality' => Str::random(20),
            'address' => Str::random(20),
        ]);}
    }
}
