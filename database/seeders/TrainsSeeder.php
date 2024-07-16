<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// uso Faker
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // il metodo run prende argomento Faker
    public function run(Faker $faker): void
    {
        // con ciclo creo 50 nuove righe per la tabella trains ma i campi saranno tutti uguali
        // for ($i = 0; $i < 50; $i++) {

        // creo nuovo treno e popolo tabella trains con il seeder
        // $train = new Train();

        // $train->azienda = 'Trenino';
        // $train->stazione_di_partenza = 'Venezia';
        // $train->stazione_di_arrivo = 'Milano';
        // $train->orario_di_partenza = '14.00';
        // $train->orario_di_arrivo = '16.00';
        // $train->codice_treno = '45698';
        // $train->numero_carrozze = 14;
        // $train->in_orario = 1;
        // $train->cancellato = 0;
        // $train->data_di_partenza = ' 	2024-07-10';
        // $train->data_di_arrivo = ' 	2024-07-10';

        // $train->save();
        // }

        // ciclo for per creare 50 treni con Faker
        for ($i = 0; $i < 50; $i++) {
            // creo record casuali con Faker
            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            // ?=numeri casuali, #= lettere casuali
            $train->codice_treno = $faker->bothify('??#?#');
            $train->numero_carrozze = $faker->numberBetween(4, 40);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->data_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');

            $train->save();
        }
    }
}
