<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $product,
        $quantity = 1,
        $total;
    public function mount($product)
    {
        $this->product = $product;
        $this->total = $product->price;
    }
    public function decrease()
    {
        if ($this->quantity  >= 2) {
            $this->quantity--;
            $this->total = $this->product->price * $this->quantity;
            $this->product->total = $this->total;
            $this->product->quantity = $this->quantity;
            $this->product->update();
        }
        return;
    }
    public function increase()
    {
        $this->quantity++;
        $this->total = $this->product->price * $this->quantity;

        $this->product->total = $this->total;
        $this->product->quantity = $this->quantity;
        $this->product->update();
        // dd($user->total);
    }
    public function render()
    {
        return view('livewire.product');
    }
}
