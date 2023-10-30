<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->azienda =  $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTimeBetween('now', 'now');
            $train->orario_di_arrivo = $faker->dateTimeBetween('now', '+1 week');
            $train->codice_treno = $faker->bothify('??-#########');
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
