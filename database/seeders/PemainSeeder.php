<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pemain::create([
        //     'nama_pemain' => 'pablo',
        //     'no_punggung' => 99,
        //     'posisi' => 'shooter',
        // ]);
        $posisi = ['shooter', 'defender', 'hybrid', 'goalkeeper'];
        for ($i = 0; $i < 10; $i++) {
            Pemain::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(0, 100),
                'posisi' => $posisi[fake()->numberBetween(0, 3)],
            ]);
        }
    }   
}
