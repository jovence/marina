<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfCustomers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.list-of-customers', [
            'customers' => User::where('role', 0)
                             ->latest()
                             ->paginate(10)
        ])->layout('dashboard');
    }
}
