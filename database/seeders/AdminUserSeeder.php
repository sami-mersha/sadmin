<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        // Create an admin role if it does not exist
        $role = Role::firstOrCreate(['name' => 'admin']);
        
        // Create an admin user
        $user = User::updateOrCreate(
            ['email' => 'admin@example.com'], // Use a unique identifier (e.g., email)
            [
                'name' => 'Admin User',
                'password' => bcrypt('password') // Use a secure password
            ]
        );
        
        // Assign the admin role to the user
        $user->assignRole($role);
    }
}
