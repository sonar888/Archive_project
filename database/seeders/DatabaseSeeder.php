<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Work;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        

        Work::factory(20)->create();
        User::factory(10)->create();
        Tag::factory(10)->create();
    }
}
