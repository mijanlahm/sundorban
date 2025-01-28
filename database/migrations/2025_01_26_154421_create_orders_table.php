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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Customer who placed the order
            $table->string('status')->default('pending'); // Order status (pending, completed, cancelled, etc.)
            $table->decimal('total_price', 10, 2);
            $table->string('delivery_type'); // Either "home_delivery" or "click_and_collect"
            $table->string('shipping_address')->nullable(); // Address for home delivery
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
