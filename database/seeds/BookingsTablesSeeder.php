<?php

use App\Booking;
use App\Customer;
use App\Room;
use Illuminate\Database\Seeder;

class BookingsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer=collect(Customer::all()->modelKeys());
        $room=collect(Room::where('status', '=', 0)->get()->modelKeys());
        $booking=[];
        for ($i = 0; $i < 100; $i++) {
            $booking[] = [
                'customer_id'       => $customer->random(),
                'room_id'           => $room->random(),
            ];
        }
        $chunks = array_chunk($booking, 50);
        foreach ($chunks as $chunk) {
            Booking::insert($chunk);
        }
    }
}
