<?php

namespace Database\Seeders;

use App\Models\Gymnasium;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GymnasiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gymnasium::insert([
            'name' => 'GOR Antares',
            'type' => 'Multiple Field'
        ]);
    }
}
