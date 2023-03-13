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
        // Table people_list contains a list of people with name and surname
        Schema::create('people_list', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table people_list
        Schema::dropIfExists('people_list');
    }
};
