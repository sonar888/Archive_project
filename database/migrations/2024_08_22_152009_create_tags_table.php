<?php

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
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('archive_warnings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('relationships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('fandoms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('additional-tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
        Schema::dropIfExists('archive-warning');
        Schema::dropIfExists('category');
        Schema::dropIfExists('relationship');
        Schema::dropIfExists('characters');
        Schema::dropIfExists('fandom');
    }
};



// public function up ()
// {
//     Schema::create('payroll', function (Blueprint $table) {
//         $table->increments('id');
//         $table->integer('position_id');
//         $table->decimal('salary',9,2);
//     });

//     // Add the constraint
//     DB::statement('ALTER TABLE payroll ADD CONSTRAINT chk_salary_amount CHECK (salary < 150000.00);');
// }