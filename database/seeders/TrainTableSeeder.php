<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(Faker $faker): void
    {

        //stabilire delle variabili corrispondenti a inizio e fine data
        $startDate = '2024-09-13';
        $endDate = '2024-09-30';

        //stabilire delle variabili per generare la data di partenza e la data di arrivo
        $departure_date_time = $faker->dateTimeBetween('06:00', '20:59');
        $arrival_date_time = $faker->dateTimeBetween('10:00', '23:54' );

        for ($i = 0; $i < 20; $i++){
            $train = new Train();
            $train->agency = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
            $train->departure_station = $faker->randomElement(['Napoli Centrale', 'Milano Centrale', 'Torino Porta Nuova', 'Roma Termini', 'Roma Stazione Tiburtina', 'Firenze Campo di Marte', 'Firenze Santa Maria Novella', 'Venezia Santa Lucia']);
            $train->arrival_station = $faker->randomElement(['Napoli Centrale', 'Milano Centrale', 'Torino Porta Nuova', 'Roma Termini', 'Roma Stazione Tiburtina', 'Firenze Campo di Marte', 'Firenze Santa Maria Novella', 'Venezia Santa Lucia']);
            $train->departure_time = $departure_date_time;
            $train->arrival_time = $arrival_date_time;
            $train->departure_date = $faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d');
            $train->train_code = $faker->randomNumber(5, true);
            $train->coach = $faker->numberBetween(4, 11);
            $train->on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->save();

        }
    }
}
