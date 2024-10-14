<?php

use App\Models\Order;
use App\Models\Product;
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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Az egyedi order_item azonosító
            $table->foreignIdFor(Order::class)->constrained()->onDelete('cascade'); // Kapcsolat az orders táblával
            $table->foreignIdFor(Product::class)->constrained()->onDelete('cascade'); // Kapcsolat a products táblával
            $table->integer('amount'); // Mennyiség
            $table->timestamps(); // Létrehozás és frissítés dátumai
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
