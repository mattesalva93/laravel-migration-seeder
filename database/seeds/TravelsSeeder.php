<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $travel = new Travel();
            $travel->destinazione = $faker->state();
            $travel->durata = $faker->randomDigit();
            $travel->data_partenza = $faker->date('Y_m_d');
            $travel->prezzo = $faker->numberBetween(100, 1000);
            $travel->descrizione = $faker->paragraph();

            $travel->save();
        }
        
    }
}
