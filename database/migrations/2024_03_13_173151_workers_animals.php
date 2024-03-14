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
        Schema::create('workers_animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id')->nullable();
            $table->unsignedBigInteger('worker_id')->nullable();
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('worker_id')->references('id')->on('workers');
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
