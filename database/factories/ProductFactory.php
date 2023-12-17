<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        return [
            'name' => $name ,
            'slug' => Str::slug($name),
            'price' => '2000',
            'hot_product' => 0,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora nulla, rem aspernatur porro possimus repellat maxime autem nobis quasi? In quasi eum impedit. Quia magnam ipsa magni ullam repudiandae ipsam rerum, dolores, autem officia alias nesciunt dolore error tenetur reiciendis et obcaecati assumenda modi, nisi ut ratione. Magni, nemo ducimus.
            ',
            'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHNoaXJ0fGVufDB8fDB8fHww',
        ];
    }
}
