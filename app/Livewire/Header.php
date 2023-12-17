<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Header extends Component
{

    public $search;

    public function updatedSearch()
    {
        $query = $this->search;
        if ($query) {
            $products = Product::when($query, function ($queryBuilder) use ($query) {
                // return $queryBuilder->where('name', 'like', '%' . $query . '%');
                return $queryBuilder
                    ->where('name', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%');
            })->latest()->get();
        } else {
            $products = collect(); // Return an empty collection or use an empty array
        }
    }
    public function render()
    {
        $query = $this->search;

        if ($query) {
            $products = Product::when($query, function ($queryBuilder) use ($query) {
                // return $queryBuilder->where('name', 'like', '%' . $query . '%');
                return $queryBuilder
                    ->where('name', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%');
            })->latest()->get();
        } else {
            $products = collect(); // Return an empty collection or use an empty array
        }
        return view('livewire.header', compact('products'));
    }
}
