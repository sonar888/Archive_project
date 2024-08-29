<?php

use App\Models\Tag;
use App\Models\Work;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\User;
use App\Models\Kudos;
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
            $table->foreignIdFor(Chapter::class, 'chapter_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class, 'work_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'author_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('comment_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Comment::class, 'comment_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Chapter::class, 'chapter_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class, 'work_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'author_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('kudos_work', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Work::class, 'work_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'author_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_work');
        Schema::dropIfExists('chapter_work');
        Schema::dropIfExists('comment_work');
        Schema::dropIfExists('kudos_work');
    }
};
