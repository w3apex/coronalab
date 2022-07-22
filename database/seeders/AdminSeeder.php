<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::where('email','raj@gmail.com')->first();
        
    	if (is_null($admin)) {
    		$admin = new Admin();
            $admin->name = "Raj Sana";
	        $admin->username = "superadmin";
	        $admin->email = "raj@gmail.com";
	        $admin->password = Hash::make('12345678');
	        $admin->save();
    	}
    }
}
