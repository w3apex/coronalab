<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	//Create Role
        $roleSuperAdmin    = Role::create(['name' => 'superadmin']);
        $roleAdmin         = Role::create(['name' => 'admin']);
        //$roleManager       = Role::create(['name' => 'manager']);
        $roleDoctor        = Role::create(['name' => 'doctor']);
        $roleLabtechnitian = Role::create(['name' => 'labtechnitian']);
        $roleEditor        = Role::create(['name' => 'editor']);
        //$roleUser          = Role::create(['name' => 'user']);

        //Permission List a Array
        $permissions = [
            // Dashboard Permission
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'admin.dashboard',
                    'dashboard.edit',
                ]
            ],
            // Admin Permission
            [
                'group_name' => 'admin',
                'permissions' => [
                    'admins.index',
                    'admins.create',
                    'admins.edit',
                    'admins.delete',
                ]
            ],
            // Role Permission
            [
                'group_name' => 'role',
                'permissions' => [
                    'roles.index',
                    'roles.create',
                    'roles.edit',
                    'roles.delete',
                ]
            ],
            // Division Permission
            [
                'group_name' => 'division',
                'permissions' => [
                    'divisions.index',
                    'divisions.create',
                    'divisions.edit',
                    'divisions.delete',
                ]
            ],
            // Division Permission
            [
                'group_name' => 'district',
                'permissions' => [
                    'districts.index',
                    'districts.create',
                    'districts.edit',
                    'districts.delete',
                ]
            ],
            // Slider Permission
            [
                'group_name' => 'slider',
                'permissions' => [
                    'sliders.index',
                    'sliders.create',
                    'sliders.edit',
                    'sliders.delete',
                ]
            ],
            // Service Permission
            [
                'group_name' => 'service',
                'permissions' => [
                    'services.index',
                    'services.create',
                    'services.edit',
                    'services.delete',
                ]
            ],
            // Booking Permission
            [
                'group_name' => 'booking',
                'permissions' => [
                    'bookings.create',
                    'bookings.view',
                    'bookings.edit',
                    'bookings.delete',
                ]
            ],
            // Lab Technitian Permission
            [
                'group_name' => 'labTechnitian',
                'permissions' => [
                    'booked.list',
                    'collected.list',
                    'view.report',
                    'complete.list',
                    'view.report.doctor',
                ]
            ],
            // Doctor Permission
            [
                'group_name' => 'doctor',
                'permissions' => [
                    'request.list',
                ]
            ],
            // Booking Permission
            [
                'group_name' => 'patient',
                'permissions' => [
                    'patients.index',
                    'patients.create',
                    'patients.edit',
                    'patients.delete',
                ]
            ],
             // Transaction Permission
            [
                'group_name' => 'transaction',
                'permissions' => [
                    'transactions.list',
                    'transactions.edit',
                    'transactions.refund',
                ]
            ],
            // Profile Permission
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.create',
                    'profile.view',
                    'profile.edit',
                ]
            ],
            // User Permission
            /*[
                'group_name' => 'user',
                'permissions' => [
                    'users.view',
                    'users.edit',
                    'users.delete',
                    'users.approve',
                ]
            ],*/
            // Blog Permissions
            [
                'group_name' => 'blog',
                'permissions' => [
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approve',
                ]
            ],
            
        ];

        //Create & Assign Permission
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup  = $permissions[$i]['group_name'];

            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) { 
                //Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
