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

        Schema::create('archive_warning', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            
        });

        Schema::create('category', function (Blueprint $table) {
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
        Schema::dropIfExists('rating-tags');
        Schema::dropIfExists('archive-warning-tags');
        Schema::dropIfExists('category-tags');
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