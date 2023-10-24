<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'nama' => $this->faker->word,
            'deskripsi' => $this->faker->sentence(mt_rand(10,20)),
            'kecacatan' => $this->faker->sentence(mt_rand(5,10)),
            'image'=> $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'kategori_id' => mt_rand(1,5),
            'kondisi_id' => mt_rand(1,3),
            'jumlah' => mt_rand(20, 30),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
