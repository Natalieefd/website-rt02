<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anggotaKepengurusan>
 */
class anggotaKepengurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "namaAnggota" => fake()->name(),
            "jabatanAnggota" => fake()->randomElement(["Sekertaris", "Bendahara"]),
            "fotoAnggota" => fake()->randomElement(["logo-desa-tanah-datar.png"])
        ];
    }
}
