<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\anggotaKepengurusan;
use App\Models\kegiatan;
use App\Models\penduduk;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // anggotaKepengurusan::factory(3)->create();
        // penduduk::factory(1)->create();
        // kegiatan::factory(7)->create();
        $this->call([UserSeeders::class]);
    }
}
