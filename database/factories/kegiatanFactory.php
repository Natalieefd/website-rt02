<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kegiatan>
 */
class kegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "fotoKegiatan" => fake()->randomElement(
                ["gotong-royong-di-kantor-desa.jpeg",
                "melayat-warga-RT-02.jpeg",
                "memenuhi-undangan-desa.jpeg",
                "menghadiri-undangan-masyarakat.jpeg",
                "musdus-(musyawarah-dusun).jpeg",
                "musywarah-BKKDRT.jpeg",
                "musyawarah-ke-amanan-desa-khususnya-RT-02.jpeg",
                "rumah-ketua-rt.PNG"])
        ];
    }
}
