<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\MembersImport;
use Maatwebsite\Excel\Facades\Excel;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $community = '';

        // Read the community from the Excel file before importing
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(__DIR__ . '/real_data/LogicMembers.xlsx');
        $community = $spreadsheet->getActiveSheet()->getCell('B1')->getValue();
        Excel::import(new MembersImport($community), __DIR__ . '/real_data/LogicMembers.xlsx');
    }
}
