<?php

namespace Database\Factories;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'     => $this->faker->sentence(mt_rand(2,6)),
            'slug'      => $this->faker->slug(),
            'excerpt'   => $this->faker->paragraph(),
            'body'      => $this->faker->paragraph(mt_rand(5,10)),
            'published_at'=> Carbon::parse('2023-08-22')
        ];
    }
}
