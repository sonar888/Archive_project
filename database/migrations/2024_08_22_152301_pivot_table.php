<?php

use App\Models\ArchiveWarning;
use App\Models\Tag;
use App\Models\Work;
use App\Models\Rating;
use App\Models\Category;
use App\Models\Character;
use App\Models\Fandom;
use App\Models\Relationship;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tag_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('rating_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Rating::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('archive_warning_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ArchiveWarning::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('category_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('fandom_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Fandom::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('relationship_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Relationship::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('character_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Character::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_work');
        Schema::dropIfExists('rating_work');
        Schema::dropIfExists('archive_warning_work');
        Schema::dropIfExists('category_work');
        Schema::dropIfExists('relationship_work');
        Schema::dropIfExists('character_work');
        Schema::dropIfExists('fandom_work');

        
    }
};
