<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComprobanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_documento' => $this->faker->randomElement(['factura', 'boleta', 'nota']),
            'fecha' => $this->faker->date(),
            'serie' => $this->faker->randomNumber(3),
            'numero' => $this->faker->randomNumber(6),
            'moneda' => $this->faker->randomElement(['USD', 'EUR', 'GBP']),
            'ruc' => $this->faker->numerify('#############'),
            'tipo_cliente' => $this->faker->randomElement(['persona', 'empresa']),
            'nombre_cliente' => $this->faker->name(),
            'direccion_cliente' => $this->faker->address(),
            'celular_cliente' => $this->faker->phoneNumber(),
            'descuento' => $this->faker->randomFloat(2, 0, 100),
            'metodo_pago' => $this->faker->randomElement(['efectivo', 'tarjeta']),
            'observaciones' => $this->faker->text(),
            'total' => $this->faker->randomFloat(2, 0, 1000),

        ];
    }
}
