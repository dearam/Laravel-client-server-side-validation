<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Userdatas;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class UserdatasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Userdatas::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->safeEmail,
            'phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'imagepath'=>Str::slug($this->faker->imageUrl)
        ];
    }
}
