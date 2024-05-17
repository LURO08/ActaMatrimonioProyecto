<?php

namespace Database\Factories;

use App\Models\persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class personaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->firstName,
            'apellidoPaterno' => $this->faker->lastName,
            'apellidoMaterno' => $this->faker->lastName,
            'estado_civil' => $this->faker->randomElement(['soltero', 'divorciado']),
            'sexo' => $this->faker->randomElement(['masculino', 'femenino']),
            'edad' => $this->faker->numberBetween(15, 60),
            'entidad' => $this->faker->state,
            'municipio' => $this->faker->randomElement([
                'Ciudad de México',
                'Guadalajara',
                'Monterrey',
                'Puebla',
                'Tijuana',
                'León',
                'Zapopan',
                'Juárez',
                'Mérida',
                'Mexicali',
                'Aguascalientes',
                'Hermosillo',
                'Saltillo',
                'Culiacán',
                'Chihuahua',
                'Morelia',
                'San Luis Potosí',
                'Durango',
                'Toluca',
                'Querétaro',
                'Mazatlán',
                'Victoria',
                'Xalapa',
                'Tuxtla Gutiérrez',
                'Cuernavaca',
                'La Paz',
                'Oaxaca de Juárez',
                'Campeche',
                'Colima',
                // Puedes agregar más municipios aquí
            ]),
            'nacionalidad' => substr($this->faker->country, 0,10),
            'curp' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[0-9]{2}'),

        ];
    }
}