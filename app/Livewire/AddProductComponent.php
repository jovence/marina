<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;
    public  $title, $description, $price, $image, $categories, $category_id;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function saveProduct()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Example validation rules
        ]);
    
        $path = $this->image->store("products", "public");
    
        Product::create([
            "title" => $this->title,
            "category_id" => $this->category_id,
            "description" => $this->description,
            "price" => $this->price,
            "image" => $path,
        ]);
    
        session()->flash("message", "Product added successfully");
    }
    public function render()
    {
        return view('livewire.add-product-component')->layout('dashboard');
    }
}
