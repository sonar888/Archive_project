<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seeding the DB with the rating

        DB::table('rating')->insert([
            'name' => 'Not rated'
        ]);

        DB::table('rating')->insert([
            'name' => 'General Audiences'
        ]);

        DB::table('rating')->insert([
            'name' => 'Teen And Up Audiences '
        ]);

        DB::table('rating')->insert([
            'name' => 'Mature'
        ]);

        DB::table('rating')->insert([
            'name' => 'Explicit'
        ]);

        //Seeding the DB with the archive warnings

        DB::table('archive_warnings')->insert([
            'name' => 'Choose Not To Use Archive Warnings'
        ]);

        DB::table('archive_warnings')->insert([
            'name' => 'Graphic Depictions Of Violence'
        ]);

        DB::table('archive_warnings')->insert([
            'name' => 'Major Character Death'
        ]);

        DB::table('archive_warnings')->insert([
            'name' => 'No Archive Warnings Apply'
        ]);



        //Seeding the DB with the categories

        DB::table('categories')->insert([
            'name' => 'F/F'
        ]);

        DB::table('categories')->insert([
            'name' => 'F/M'
        ]);

        DB::table('categories')->insert([
            'name' => 'Gen'
        ]);

        DB::table('categories')->insert([
            'name' => 'M/M'
        ]);


        //Additonal tags

        Tag::factory(20)->create(
            
        );



        
    }
}
