<?php

namespace Database\Seeders;

use App\Models\Department;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('employees')->insert(
                [
                    'name' => $faker->name,
                    'code' => Str::uuid()->toString(),
                    'department_id' => Department::all()->random()->id,
                ]
            );
        }
    }
}
