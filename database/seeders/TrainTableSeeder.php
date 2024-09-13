<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

//importare la libreria Carbon per la gestione delle date
// use Carbon\Carbon;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(Faker $faker): void
    {
        // $year = 2024;
        // $month = Carbon::now()->format('m');
        // $startDate = Carbon::create($year, $month, 1);
        // $endDate = Carbon::create($year, $month, 1)->endOfMonth();

        for ($i = 0; $i < 20; $i++){
            $train = new Train();
            $train->agency = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
            $train->departure_station = $faker->randomElement(['Napoli Centrale', 'Milano Centrale', 'Torino Porta Nuova', 'Roma Termini', 'Roma Stazione Tiburtina', 'Firenze Campo di Marte', 'Firenze Santa Maria Novella', 'Venezia Santa Lucia']);
            $train->arrival_station = $faker->randomElement(['Napoli Centrale', 'Milano Centrale', 'Torino Porta Nuova', 'Roma Termini', 'Roma Stazione Tiburtina', 'Firenze Campo di Marte', 'Firenze Santa Maria Novella', 'Venezia Santa Lucia']);
            $train->departure_time = $faker->time('H:i:s');
            $train->arrival_time = $faker->time('H:i:s');
            $train->departure_date = $faker->dateTimeBetween('2024-09-13', '2024-09-30')->format('Y-m-d');
            $train->train_code = $faker->randomNumber(5, true);
            $train->coach = $faker->numberBetween(1, 11);
            $train->on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->save();

        }
    }
}
