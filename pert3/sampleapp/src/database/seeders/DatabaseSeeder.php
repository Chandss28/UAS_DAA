<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classroom;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->SeedUsers();
        $this->callSeeders();
    }

    private function SeedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createmany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Mahasiswa',
                    'email' => 'mhs@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Dosen',
                    'email' => 'dsn@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                    }
                }
            }
        }

        private function callSeeders(): void {
            $this->call([
                RoleSeeder::class,
                ClassroomSeeder::class,
            ]);
        }
}