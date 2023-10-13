<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => 1,
                'code' => 'COMPANY',
                'name' => 'Công ty',
                'parent_id' => null,
            ],
            [
                'id' => 2,
                'code' => 'A',
                'name' => 'Phòng A',
                'parent_id' => 1,
            ],
            [
                'id' => 3,
                'code' => 'B',
                'name' => 'Phòng B',
                'parent_id' => 1,
            ],
            [
                'id' => 4,
                'code' => 'DB1',
                'name' => 'Đội B1',
                'parent_id' => 3,
            ],
            [
                'id' => 5,
                'code' => 'C',
                'name' => 'Phòng C',
                'parent_id' => 1,
            ],
            [
                'id' => 6,
                'code' => 'DC1',
                'name' => 'Đội C1',
                'parent_id' => 5,
            ],
            [
                'id' => 7,
                'code' => 'DC2',
                'name' => 'Đội C2',
                'parent_id' => 5,
            ],
        ];
        foreach($datas as $item){
            Department::create($item);
        }
        
    }
}
