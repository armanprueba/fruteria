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

        $imagenes = [
            'Manzana' => "https://www.recetasnestlecam.com/sites/default/files/2022-04/tipos-de-manzana-royal-gala.jpg",//'https://assets.stickpng.com/thumbs/580b57fbd9996e24bc43c11c.png',
            'Plátano' => 'https://disfrutaverdura.com/1033-large_default/platanos-800g.jpg',
            'Melón' => 'https://purepng.com/public/uploads/large/purepng.com-melonmelonfleshy-fruitfruitkind-of-berrypepo-1701527335082hgtjj.png',
            'Pera' => 'https://www.frutality.es/wp-content/uploads/frutality-fruta_pera_verde.png',
            'Naranja' => 'https://png.pngtree.com/png-clipart/20210718/original/pngtree-orange-fruit-ingredients-close-up-png-image_6529699.jpg',
            'Sandía' => 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c1a5.png',
            'Fresa' => 'https://frutasborja.es/wp-content/uploads/2015/12/fresa2.png',
        ];
        
        for($i=0;$i<=5;$i++){
            $faker = Faker::create();
            $nombre = $faker->randomElement(array_keys($imagenes));
            
            $fruta = new Fruta();
            $fruta->nombre = $nombre;
            $fruta->temporada = $faker->randomElement(['Primavera','Verano','Otoño', 'Diciembre']);
            $fruta->precio= $faker->numberBetween($min = 0.5, $max = 4.2);
            $fruta->stock= $faker->numberBetween($min = 1, $max = 100);
            $fruta->imagen = $imagenes[$nombre];
            $fruta->save();
        }
        
    }
}
