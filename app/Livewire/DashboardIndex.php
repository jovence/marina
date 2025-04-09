<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Dashboardindex extends Component
{
    public $totalOrders;
    public $totalProducts;
    public $totalCategories;
    public $ordersByStatus;
    public $numberOfUsers;
    public $totalCustomers; // Add this property

    public function mount()
    {
        $this->loadOverviewData();
    }

    public function loadOverviewData()
    {
        $this->totalOrders = Order::count();
        $this->totalProducts = Product::count();
        $this->totalCategories = Category::count();
        $this->numberOfUsers = User::count();
        $this->totalCustomers = User::where('role', 0)->count(); // Add this line
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.dashboard-index', [
            'users' => $users,
        ])->layout('dashboard');
    }
}

