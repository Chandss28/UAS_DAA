<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed users after roles exist
        $this->seedUsers();

        // Additional seeders
        $this->call([SchedulesSeeder::class]);
        $this->call([PermissionsSeeder::class]);
    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Create Customer Support user if not exists (no "Mahasiswa" user anymore)
        $csEmail = 'cs@admin.com';
        if (! User::where('email', $csEmail)->exists()) {
            $cs = User::create([
                'name' => 'Customer Support',
                'email' => $csEmail,
                'password' => bcrypt('password'),
            ]);
            $cs->assignRole('Customer Support');
        }
    }
}
