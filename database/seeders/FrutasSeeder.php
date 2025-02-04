<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Fruta;

class FrutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $fruta = new Fruta();
        $fruta->nombre = $faker->randomElement(['Platano','Pera','Fresa', 'Sandia', 'Melón', 'Ciruela', 'Manzana']);
        $fruta->temporada = $faker->randomElement(['Primavera','Verano','Otoño', 'Diciembre']);
        $fruta->precio= $faker->numberBetween($min = 0.5, $max = 4.2);
        $fruta->stock= $faker->numberBetween($min = 1, $max = 20);
        $fruta->save();
    }
}
