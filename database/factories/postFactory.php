<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\category;


class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [

            'user_id'=> User::all()->random()->id,
            'foto'=> $this->faker->imageUrl(1280, 1280, null, true),
            'title'=> $name,
            'slug'=> Str::slug($name),
            'descripcion' => $this->faker->text(50),
            'contenido' => $this->faker->text(500),
            'category_id' => Category::all()->random()->id,

        
        ];
    }
}
