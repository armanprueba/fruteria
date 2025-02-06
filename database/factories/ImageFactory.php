<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ImageFactory extends Factory
{
    public function definition()
    {
        $imagePath = 'storage/images/'; // Ruta accesible públicamente
        $files = Storage::files('public/images'); // Obtener imágenes de la carpeta
        $randomImage = $files ? str_replace('public/', '', $files[array_rand($files)]) : null;

        
    }
}
