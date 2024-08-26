<?php

use App\Models\Tag;
use App\Models\Work;
use App\Models\Chapter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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

        Schema::create('chapter_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Chapter::class)->constrained()->cascadeOnDelete();
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
