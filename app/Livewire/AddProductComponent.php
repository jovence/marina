<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $price, $image, $categories, $category_id, $product_id;
    public $isEditMode = false; // To toggle between add and update modes

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function saveProduct()
    {
        $this->validate([
            'image' => 'required|image|max:2048', // Allow all image types
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
        $this->resetForm();
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $this->product_id = $product->id;
        $this->title = $product->title;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category_id = $product->category_id;
        $this->isEditMode = true;
    }

    public function updateProduct()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($this->product_id);

        if ($this->image) {
            $this->validate([
                'image' => 'image|max:2048', // Allow all image types
            ]);
            $path = $this->image->store("products", "public");
            $product->image = $path;
        }

        $product->update([
            "title" => $this->title,
            "category_id" => $this->category_id,
            "description" => $this->description,
            "price" => $this->price,
            "image" => $product->image,
        ]);

        session()->flash("message", "Product updated successfully");
        $this->resetForm();
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        session()->flash("message", "Product deleted successfully");
    }

    public function resetForm()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->image = null;
        $this->category_id = null;
        $this->product_id = null;
        $this->isEditMode = false;
    }

    public function render()
    {
        $products = Product::all(); // Fetch all products to display in the view
        return view('livewire.add-product-component', compact('products'))->layout('dashboard');
    }
}