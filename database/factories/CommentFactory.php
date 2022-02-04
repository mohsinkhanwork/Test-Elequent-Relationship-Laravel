<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
             'name' => $this->faker->name(),
             'comment' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'task_id' => Task::all()->random()->id,
        ];
    }
}
