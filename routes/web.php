<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\AddProductComponent;
use App\Livewire\BrowseProductsComponent;
use App\Livewire\CartComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\Dashboardindex;
use App\Livewire\Orderlist;
use App\Livewire\OrderManagementComponent;
use App\Livewire\SingleProductComponent;
use App\Livewire\ListOfCustomers;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/product/{id}', SingleProductComponent::class)->name('product.show');

}); 
Route::get('/', BrowseProductsComponent::class)->name('products.browse');
Route::get('/order/list', Orderlist::class)->name('user.orders');

// Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.show');
//routes made availble only for admin users
Route::middleware(['auth','verified','admin'])->group(function (){
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/dashboard',Dashboardindex::class)->name('dashboard');

    Route::get('/admins/categories', CategoryComponent::class)->name('admin.categories');

    Route::get('/admins/add-product', AddProductComponent::class)->name('admin.add-product');

    Route::get('/admins/orders', OrderManagementComponent::class)->name('admin.orders');

    Route::get('/admins/customers', ListOfCustomers::class)->name('admin.customers');
});

require __DIR__.'/auth.php';
