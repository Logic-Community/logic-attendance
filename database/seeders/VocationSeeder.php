<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vocation;

class VocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vocations = [
            ['name' => 'Mekatronika'],
            ['name' => 'PPLG'],
            ['name' => 'DKV'],
            ['name' => 'Kimia Industri'],
            ['name' => 'Permesinan'],
        ];

        Vocation::insert($vocations);
    }
}
