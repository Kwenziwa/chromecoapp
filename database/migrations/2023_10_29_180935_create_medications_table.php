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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dosage')->nullable();
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('image_url')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->boolean('is_visible')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
