<?php

namespace Database\Factories;
use App\Models\post;
use App\Models\image;
use Illuminate\Database\Eloquent\Factories\Factory;



class imageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(20);
        return [
            'post_id'=> post::all()->random()->id,
            'image'=> $this->faker->imageUrl(1280, 1280, null, true),
                                    
        ];
    }
}
