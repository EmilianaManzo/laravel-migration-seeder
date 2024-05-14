<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // la r vuol dire che siamo in lettura read
        $data_str = fopen(__DIR__ .'/trains.csv' , 'r');
        $i= 0;

        while(($row = fgetcsv($data_str)) !== false ){

            // dump($row);
            // parto dalla seconda riga
            if($i > 0){
                $new_train = new Train();
                $new_train->agency = $row[0];
                $new_train->departure_station = $row[1];
                $new_train->arrival_station = $row[2];
                $new_train->departure_time = $row[3];
                $new_train->arrival_time = $row[4];
                $new_train->train_code = $row[5];
                $new_train->number_carriage = $row[6];
                $new_train->is_inTime= $row[7];
                $new_train->is_deleted = $row[8];

                $new_train->save();

            }
            $i++;
        }
        fclose($data_str);
    }
}
