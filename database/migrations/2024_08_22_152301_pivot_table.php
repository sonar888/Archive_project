<?php

use App\Models\ArchiveWarning;
use App\Models\Tag;
use App\Models\Work;
use App\Models\Rating;
use App\Models\Category;
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



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_work');
        
    }
};
