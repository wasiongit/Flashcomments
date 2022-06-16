<?php

namespace Database\Factories;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'topic_id' => 1,
            'language_id' => 1,
            'content' => $this->faker->text()
        ];
    }

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comments::class;
}
