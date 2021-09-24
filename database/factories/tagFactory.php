<?php

namespace Database\Factories;


use App\Models\tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class tagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'title'=> $name,
            'slug'=> Str::slug($name),
        ];
    }
}
