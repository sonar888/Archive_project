<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Tag;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'author_id');
            $table->text('title');
            $table->text('summary');
            $table->integer('chapter_count');
            $table->integer('kudos');
            $table -> timestamps();
            $table->text('end-notes');
            $table->text('start-notes');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
 