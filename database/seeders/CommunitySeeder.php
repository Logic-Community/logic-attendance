<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $communities = [
            [
                'code' => 'LOGIC',
                'name' => 'LOGIC',
                'description' => 'Logical Imagination Community',
                'active' => true
            ],
        ];

        Community::insert($communities);
    }
}
