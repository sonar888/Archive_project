<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create([
            'name' => 'Choose Not To Use Archive Warnings',
            'type' => 'Archive Warnings'
        ]);

        Tag::factory()->create([
            'name' => 'Graphic Depictions Of Violence',
            'type' => 'Archive Warnings'
        ]);

        Tag::factory()->create([
            'name' => 'Major Character Death',
            'type' => 'Archive Warnings'
        ]);

        Tag::factory()->create([
            'name' => 'Not Rated',
            'type' => 'Rating'
        ]);

        Tag::factory()->create([
            'name' => 'General Audiences',
            'type' => 'Rating'
        ]);

        Tag::factory()->create([
            'name' => 'Teen and Up Audiences',
            'type' => 'Rating'
        ]);

        Tag::factory()->create([
            'name' => 'Mature',
            'type' => 'Rating'
        ]);

        Tag::factory()->create([
            'name' => 'Explicit',
            'type' => 'Rating'
        ]);
    }
}
