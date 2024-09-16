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

        // $user = User::factory()
        //     ->has(Post::factory()->count(3))
        //     ->create();

        Work::factory(5)
            ->has(Chapter::factory()->count(3))
            ->has(Comment::factory()->count(3))
            ->has(Tag::factory()->count(3))
            ->create(
                [
                    "kudos"=>1000,
                    "chapter_count"=>12
                ]
                );
        
        User::factory(7)->create();

        $this->call(TagSeeder::class);

        

        

    }
}
