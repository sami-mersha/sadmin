<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }
    public function run()
    {
        // Create permissions if they do not exist
        $permission = Permission::firstOrCreate(['name' => 'dashboard_access']);
        
        // Retrieve the admin role
        $role = Role::where('name', 'admin')->first();
        
        // Check if the role and permission exist before attaching
        if ($role) {
            $role->givePermissionTo($permission);
        }
    }
}
