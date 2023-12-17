<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\On; 

class CheckoutCard extends Component
{

   
    // protected $listeners = ['paymentSuccess' => 'submitOrder'];
    public $products,
    $orderProducts = [],
    $orders,
    $quantity = 1,
    $total = 0,
    $productTotal = 0;

    


    public function mount($products){
        $this->products = $products;
        $carts = Cart::latest()->get();
        foreach ($carts as $value) {
            $this->productTotal += $value->total; // Accumulate the totals
        }

        // $orderProducts[];
        // $product_name;
        foreach ($products as $value) {
            // dd($value);
            $products = [
            'user_id' => $value->user_id,
            'product_name' => $value->product_name,
            'amount' => $value->total ,
            'quantity' => $value->quantity ?? "1",
            ];
            $this->orderProducts[] =  $products;
            $this->orders = $this->orderProducts;
        }
            
        
        // dd($this->orderProducts);
      
    }
    public function realTotal(){
        $carts = Cart::latest()->get();
        $totals = [];
        foreach ($carts as $value) {
            $totals[] = $value->total; // Accumulate the totals
        }
        $this->total =  array_sum($totals);
        
    }

    #[On('paymentSuccess')] 
    public function submitOrder($reference){
        
        foreach ($this->orderProducts as &$order) {
            $order['order_id'] = $reference; // Adding timestamp to ensure uniqueness
            $order['created_at'] = now(); // Adding timestamp to ensure uniqueness
            $order['updated_at'] = now(); // Adding timestamp to ensure uniqueness
        }

        unset($order);

        DB::table('orders')->insert($this->orderProducts);
        // $carts = Cart::latest()->get();
        Cart::truncate();

    }
    public function render()
    {
        return view('livewire.checkout-card');
    }
}
