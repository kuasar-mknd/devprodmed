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
        // Table agenda contains for a specifique date a list of people from people_list and a start meeting and end meeting time
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_meeting');
            $table->time('end_meeting');
            $table->foreignId('people_list_id')->constrained('people_list');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
