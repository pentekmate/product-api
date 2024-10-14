<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::all();
        $products = Product::all();
        foreach($orders as $order){
            OrderItem::factory()->create([
                'order_id'=>$order->id,
                'product_id'=>$products->random(),
                'amount'=>rand(1,3)
            ]);
        }
    }
}
