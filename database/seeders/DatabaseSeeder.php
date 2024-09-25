<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin123',
            'password' => bcrypt('admin123'),
        ]);
    }
}
