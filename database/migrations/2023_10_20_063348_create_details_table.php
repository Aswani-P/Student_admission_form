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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('gender',30);
            $table->string('dob');
            $table->string('caste',20);
            $table->string('nationality',50);
            $table->string('parent',100);
            $table->string('address',100);
            $table->string('conatct',20);
            $table->string('email',30);
            $table->string('examination',100);
            $table->string('register',20);
            $table->string('yearofpassing',10);
            $table->string('institution',100);
            $table->string('state',20);
            $table->string('photo',20);
            $table->string('certificate',20);
            $table->string('adhar',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
