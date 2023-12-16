<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CheckoutCard extends Component
{

    public $products,
    $quantity = 1,
    $total = 0,
    $productTotal = 0;
    public function mount($products){
        $this->products = $products;
        $carts = Cart::latest()->get();
        foreach ($carts as $value) {
            $this->productTotal += $value->total; // Accumulate the totals
        }
        
        // dd($this->total);
      
    }
    public function realTotal(){
        $carts = Cart::latest()->get();
        $totals = [];
        foreach ($carts as $value) {
            $totals[] = $value->total; // Accumulate the totals
        }
        $this->total =  array_sum($totals);
        // dd(  $this->total );
        
    }
    public function render()
    {
        return view('livewire.checkout-card');
    }
}
