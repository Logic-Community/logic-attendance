<?php

namespace App\Imports;

use App\Models\Community;
use App\Models\CommunityMember;
use App\Models\Vocation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MembersImport implements ToModel, WithHeadingRow, WithStartRow
{
    public $community;

    public function __construct($community)
    {
        $this->community = $community; // Set the community from the constructor
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $community_id = Community::where('code', strtoupper($this->community))->first()->id;
        $vocations = Vocation::pluck('id', 'code')->toArray();

        return new CommunityMember([
            'community_id' => $community_id,
            'nisn' => $row['nisn'],
            'name' => $row['nama'],
            'vocation_id' => $vocations[$row['jurusan']],
            'class_name' => $row['kelas'],
            'class_grade' => $row['tingkat'],
            'active' => true,
        ]);
    }

    public function headingRow(): int
    {
        return 2; // The header is in the 2nd row
    }

    public function startRow(): int
    {
        return 3; // data starts at row 5
    }
}
