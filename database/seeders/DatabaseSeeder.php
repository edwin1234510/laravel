<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use App\Models\image;
use App\Models\product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        category::factory(10)->create();
        product::factory(50)->create();
    }
}
