<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::insert([
            [
                'name' => 'Futsal',
                'number' => 1,
                'status' => 'Ready',
            ],
            [
                'name' => 'Badminton',
                'number' => 1,
                'status' => 'Ready',
            ],
            [
                'name' => 'Badminton',
                'number' => 2,
                'status' => 'Ready',
            ],
            [
                'name' => 'Badminton',
                'number' => 3,
                'status' => 'Ready',
            ],
            [
                'name' => 'Volly',
                'number' => 1,
                'status' => 'Ready',
            ],
            [
                'name' => 'Basket',
                'number' => 1,
                'status' => 'Ready',
            ]
        ]);
    }
}
