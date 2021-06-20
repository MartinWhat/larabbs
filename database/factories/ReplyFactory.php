<?php

namespace Database\Factories;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    protected $model = Reply::class;

    public function definition()
    {
        $time = $this->faker->dateTimeThisMonth();
        return [
            // $this->faker->name,
            'content' => $this->faker->sentence(),
            'created_at' => $time,
            'updated_at' => $time,
        ];
    }
}
