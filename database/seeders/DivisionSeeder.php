<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Division::count() == 0) {
            $divisions =  [
                [
                    'name' => 'Dhaka',
                    'priority' => '1',
                ],
                [
                    'name' => 'Chittagong',
                    'priority' => '2',
                ],
                [
                    'name' => 'Khulna',
                    'priority' => '3',
                ],
                [
                    'name' => 'Rajshahi',
                    'priority' => '4',
                ],
                [
                    'name' => 'Rangpur',
                    'priority' => '5',
                ],
                [
                    'name' => 'Barisal',
                    'priority' => '6',
                ],
                [
                    'name' => 'Sylhet',
                    'priority' => '7',
                ],
                [
                    'name' => 'Mymensingh',
                    'priority' => '8',
                ],
            ];

            Division::insert($divisions);
        } 
    }
}
