<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory([
            'isAdmin' => '1',
            'name' => 'Daniel Abib',
            'email' => 'danielabib@gmail.com',
            'password' => 'nimda',
        ])->create();
        User::factory(9)->create(['password'=>'teste']);
        Owner::factory(30)->create();
    }
}
