<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Orderlist extends Component
{
    use WithPagination;

    public function placeOrder($productId)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
            'status' => 'pending',
            'order_date' => now()
        ]);

        if ($order) {
            session()->flash('message', 'Order placed successfully!');
        } else {
            session()->flash('error', 'Failed to place order.');
        }
    }

    public function render()
    {
        $orders = Order::where('user_id', auth()->id())
                      ->with(['product', 'user'])
                      ->latest()
                      ->paginate(10);

        return view('livewire.orderlist', [
            'orders' => $orders
        ])->layout('userInterface.home');
    }
}
