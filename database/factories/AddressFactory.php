<?php

namespace Database\Factories;

use App\Models\Adress;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userCount = User::count();
        
        return [
            'user_id' => rand(1, $userCount),
            'address' =>  $this->faker->address
        ];
    }
}
