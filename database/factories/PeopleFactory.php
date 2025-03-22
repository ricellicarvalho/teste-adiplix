<?php

namespace Database\Factories;

use App\Models\People;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }

    // Método para associar tarefas já existentes a uma pessoa
    public function withTasks($taskCount = 3)
    {
        return $this->afterCreating(function (People $people) use ($taskCount) {
            $tasks = Task::inRandomOrder()->limit($taskCount)->get();
            $people->tasks()->attach($tasks);
        });
    }
}
