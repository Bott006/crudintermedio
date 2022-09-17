<?php

namespace Database\Factories;

use App\Models\Factura;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FacturaFactory extends Factory
{
    protected $model = Factura::class;

    public function definition()
    {
        return [
			'numero_factura' => $this->faker->name,
			'id_pacientes' => $this->faker->name,
			'tipo' => $this->faker->name,
			'fecha' => $this->faker->name,
        ];
    }
}
