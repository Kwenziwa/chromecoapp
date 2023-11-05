<?php

use App\Enums\OrderStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medication_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('medication_id');
            $table->foreign('medication_id')->references('id')->on('medications');
            $table->integer('quantity');
            $table->dateTime('pickup_at');
            $table->dateTime('collected_at')->nullable();
            $table->enum('status', OrderStatus::getValues())->default(OrderStatus::PROCESSING);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_orders');
    }
};
