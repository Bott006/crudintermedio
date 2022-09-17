<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticuloFactory extends Factory
{
    protected $model = Articulo::class;

    public function definition()
    {
        return [
			'codigo' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'cantidad' => $this->faker->name,
			'precio' => $this->faker->name,
        ];
    }
}
