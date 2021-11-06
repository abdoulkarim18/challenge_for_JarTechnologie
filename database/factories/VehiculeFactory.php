<?php

namespace Database\Factories;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $car_name =$this->faker->words($nb=['Kia','Range-Rover', 'Mercedes','Toyota'], );
        $type  = $this->faker->words($nb=['4x4', 'Lanborgini'],$asText=true);
        $marque  =$this->faker->words($nb=['yunday', 'Afric-Auto'], $asText=true);
        $carburant  =$this->faker->words($nb=['Diesel','Esssence','Gasoil'],$asText=true);
        return [

            'name'=>$car_name,
            'type'=>$type,
            'marque'=>$marque,
            'couleur'=>$this->faker->colorName,
            'image'=>$this->faker->imageUrl(),
            'carburant'=>$carburant,
        ];
    }
}
