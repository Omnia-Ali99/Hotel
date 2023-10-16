<?php

use App\Models\Hotel;
use App\Models\Type_room;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('price');
            $table->enum('active',['0','1']);
            $table->foreignIdFor(Hotel::class)->constrained();
            $table->foreignIdFor(Type_room::class)->constrained();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
