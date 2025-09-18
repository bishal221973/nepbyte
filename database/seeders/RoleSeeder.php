<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin=User::create([
            'name'=>'Bishal Chaudhary',
            'email'=>'bishalcodeslaravel@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);

        $admin=User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password')
        ]);

        $vendor = User::create([
            'name' => 'Vendor',
            'email' => 'vendor@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        $client = User::create([
            'name' => 'Client',
            'email' => 'client@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        $role = Role::create(['name' => 'Super-Admin']);
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'Vendor']);
        $role = Role::create(['name' => 'Client']);

        $superadmin->assignRole('Super-Admin');
        $admin->assignRole('Admin');
        $vendor->assignRole('Vendor');
        $client->assignRole('Client');
    }
}
