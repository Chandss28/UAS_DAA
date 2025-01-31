<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merchandise;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merchandise::create([
            'name' => 'McLaren Hat',
            'team' => 'McLaren',
            'description' => 'Official McLaren team hat',
            'category' => 'hat',
            'stock' => 100,
        ]);

        Merchandise::create([
            'name' => 'Ferrari Jacket',
            'team' => 'Ferrari',
            'description' => 'Official Ferrari team jacket',
            'category' => 'jacket',
            'stock' => 50,
        ]);

        Merchandise::create([
            'name' => 'Red Bull T-Shirt',
            'team' => 'Red Bull',
            'description' => 'Official Red Bull team t-shirt',
            'category' => 't-shirt',
            'stock' => 200,
        ]);
    }
}
