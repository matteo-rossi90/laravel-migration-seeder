<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //aprire il file e salvarlo in una nuova variabile
        $trains_csv = fopen(__DIR__ . '/trains2.csv', 'r');
        $i = 0;

        //reiterare il processo di popolamento dei records

        while (($row = fgetcsv($trains_csv)) != false){
            if($i > 0){
                $train = new Train();
                $train->id =$row[0];
                $train->agency = $row[1];
                $train->departure_station = $row[2];
                $train->arrival_station = $row[3];
                $train->departure_time = $row[4];
                $train->arrival_time = $row[5];
                $train->departure_date = $row[6];
                $train->train_code = $row[7];
                $train->coach = $row[8];
                $train->on_time = $row[9];
                $train->is_cancelled = $row[10];
                $train->save();

            }

            $i++;
        }

        //chiudere il file
        fclose($trains_csv);
    }
}
