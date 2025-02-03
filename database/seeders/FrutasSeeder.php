<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Libro;

class FrutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $libro = new Libro();
        $libro->editorial = $faker->randomElement(['Alfguara','Palneta','
        Bromera']);
        $libro->precio = 10;
        $libro->created_at= date('Y-m-d H:m:s');
        $libro->updated_at = date('Y-m-d H:m:s');
        $libro->save();
    }
}
