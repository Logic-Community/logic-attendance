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
            [
                'code' => 'MEKA',
                'name' => 'Mekatronika'
            ],
            [
                'code' => 'PPLG',
                'name' => 'Pemodelan Perangkat Lunak dan Gim'
            ],
            [
                'code' => 'DKV',
                'name' => 'Desain Komunikasi Visual'
            ],
            [
                'code' => 'KI',
                'name' => 'Kimia Industri'
            ],
            [
                'code' => 'TM',
                'name' => 'Teknik Mesin'
            ],
        ];

        Vocation::insert($vocations);
    }
}
