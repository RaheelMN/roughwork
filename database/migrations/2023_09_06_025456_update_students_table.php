<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // $table->string('name',50)->change();
            // $table->dropColumn('age');
            // $table->string('city')->change();
            // $table->foreign('city')->references('c_id')->on('cities')
            //       ->cascadeOnDelete()
            //       ->cascadeOnUpdate();


        });
        // DB::statement('ALTER TABLE students ADD CONSTRAINT age_limit CHECK(age>15);');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
