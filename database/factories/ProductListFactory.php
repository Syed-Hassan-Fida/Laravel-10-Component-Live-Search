<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductList;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductList>
 */
class ProductListFactory extends Factory
{
    protected $model = ProductList::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'description' => $this->faker->realText()
        ];
    }
}
