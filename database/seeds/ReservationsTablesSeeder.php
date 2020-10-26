<?php

use App\Reservation;
use App\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ReservationsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room=collect(Room::where('status', '=', 0)->get()->modelKeys());
        $reservation=[];
        for ($i = 0; $i < 100; $i++) {
            $days = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28'];
            $months = ['01', '02', '03','04', '05'];
            $months_2 = ['06', '07', '08','09', '10', '11', '12'];
            $in_date = "2020-" . Arr::random($months) . "-" . Arr::random($days);
            $out_date = "2020-" . Arr::random($months_2) . "-" . Arr::random($days);
            $reservation[] = [
                'check_in'          => $in_date,
                'check_out'         => $out_date,
                'room_id'           => $room->random(),
            ];
        }
        $chunks = array_chunk($reservation, 50);
        foreach ($chunks as $chunk) {
            Reservation::insert($chunk);
        }
    }
}
