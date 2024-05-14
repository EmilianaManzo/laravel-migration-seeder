<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->agency = 'Italo';
        $new_train->departure_station = 'Napoli Garibaldi';
        $new_train->arrival_station = 'Roma Termini';
        $new_train->departure_time = 102000;
        $new_train->arrival_time = 112000;
        $new_train->train_code = '7685848F';
        $new_train->number_carriage = 8;
        $new_train->seat_prm = 20;

        $new_train->save();
        // dump($new_train);

    }
}
