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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('chemestry_sec',30);
            $table->string('chemestry_max',30);
            $table->string('chemestry_per',30);
            $table->string('physics_sec',30);
            $table->string('physics_max',30);
            $table->string('physics_per',30);
            $table->string('biology_sec',30);
            $table->string('biology_max',30);
            $table->string('biology_per',30);
            $table->string('english_sec',30);
            $table->string('english_max',30);
            $table->string('english_per',30);
            $table->string('total_sec');
            $table->string('tatal_max');
            $table->string('total_per');
            $table->string('grand_sec');
            $table->string('grand_max');
            $table->string('grand_per');
            $table->integer('details_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
