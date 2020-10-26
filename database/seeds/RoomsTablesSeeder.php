<?php


use App\Room;
use Illuminate\Database\Seeder;
use Illuminate\Eloquent\model;
use Illuminate\Support\Str;
use Faker\Factory;


class RoomsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<100;$i++){
             Room::create([
            'floar' => int::random(10),
            'view' => Str::random(20),
            'type' => Str::random(20),
            'status' => rand(0, 1),
        ]);}
    }
}
