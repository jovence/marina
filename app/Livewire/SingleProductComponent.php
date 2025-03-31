<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Livewire\Component;

class SingleProductComponent extends Component
{
    public $productId;
    public $product;

    public function mount($id)
    {
        $this->productId = $id;
        $this->product = Product::with('category')->findOrFail($id);
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            session()->flash('error', 'Product not found.');
            return;
        }
    }

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
        if (!$this->product->category) {
            $this->product->category = new Category(['name' => 'Uncategorized']);
        }

        return view('livewire.single-product-component', [
            'product' => $this->product
        ])->layout('userInterface.home');
    }
}