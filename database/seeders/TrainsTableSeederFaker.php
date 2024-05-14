<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100 ; $i++) {
            $new_train = new Train();
            // se metto true se chiedo più parole non le mette in un array ma le concatena
            $new_train->agency = $faker->word(1,true);
            $new_train->departure_station = $faker->word(2,true);
            $new_train->arrival_station = $faker->word(2,true);
            $new_train->departure_time = $faker->time() ;
            $new_train->arrival_time = $faker->time() ;
            $new_train->train_code = $faker->regexify('[A-Z]{5}[0-9]{3}');
            $new_train->number_carriage = $faker->randomDigit();
            $new_train->seat_prm =$faker->randomNumber(2, true);

            $new_train->save();
        // dump($new_train);
        }
    }
}
