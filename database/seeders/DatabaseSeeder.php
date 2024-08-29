<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Work;
use App\Models\Kudos;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Tag;

use Database\Seeders\TagSeeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // TagSeeder::class;

        // Work::factory(3)->create();
        // User::factory(2)->create();
        
        // Chapter::factory(20)->create();
        // Comment::factory(12)->create();

        $this->call(TagSeeder::class);
        

    }
}
