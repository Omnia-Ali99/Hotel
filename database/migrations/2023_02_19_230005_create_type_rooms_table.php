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
        Schema::create('type_rooms', function (Blueprint $table) {
            $table->id();
            $table->longText('url');
            $table->enum('name',['Single Rooms ','Double rooms','Studio Rooms','Deluxe Rooms','Rooms with a View ','Suites','Presidential Suites ']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_rooms');
    }
};
