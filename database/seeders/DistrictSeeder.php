<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(District::count() == 0) {
            $districts =  [
                [
                    'name' => 'Dhaka',
                    'division_id' => '1',
                ],
                [
                    'name' => 'Chittagong',
                    'division_id' => '2',
                ],
                [
                    'name' => 'Khulna',
                    'division_id' => '3',
                ],
                [
                    'name' => 'Rajshahi',
                    'division_id' => '4',
                ],
                [
                    'name' => 'Rangpur',
                    'division_id' => '5',
                ],
                [
                    'name' => 'Barisal',
                    'division_id' => '6',
                ],
                [
                    'name' => 'Sylhet',
                    'division_id' => '7',
                ],
                [
                    'name' => 'Mymensingh',
                    'division_id' => '8',
                ],
            ];

            District::insert($districts);
        }
    }
}
