<?php

namespace ReesMcIvor\ChatGPT\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ReesMcIvor\ChatGPT\Models\Query;

class QueryFactory extends Factory
{
    protected $model = Query::class;

    public function definition() : array
    {
        return [
            'id' => 1,
            'name' => $this->faker->name,
        ];
    }
}
