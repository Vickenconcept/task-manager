<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->hasProject(2)->hasTask(10)->create();
        // Category::factory(4)
        //     ->has(Task::factory(10))
        //     ->create();
        Category::factory(3)
            ->hasProducts(5)
            ->create();
    }
}
