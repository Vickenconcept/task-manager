
 <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
    <div class="flex w-2/5"> <!-- product -->
        <div class="w-20">
            <img class="h-24"
                src="{{ $product->image }}"
                alt="">
        </div>
        <div class="flex flex-col justify-between ml-4 flex-grow">
            <span class="font-bold text-sm"> {{ $product->product_name }}</span>
           <form action="{{ route('cart.destroy',['cart'=> $product]) }}" method="post">
            @csrf
            @method('DELETE')
            <button  class="font-semibold hover:text-red-500 text-gray-500 text-xs">
               Remove
            </button>
           </form>
        </div>
    </div>
    <div class="flex justify-center w-1/5">
        <button class="cursor-pointer" wire:click="decrease">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512" >
                <path
                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
            </svg>
        </button>

        <input class="mx-2 border text-center w-8" type="text" value="1" wire:model.live="quantity">

       <button class="cursor-pointer" wire:click="increase">
        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512" >
            <path
                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
        </svg>
       </button>
    </div>
    <span class="text-center w-1/5 font-semibold text-sm">${{ $product->price }}</span>
    <span class="text-center w-1/5 font-semibold text-sm">${{ $total }}</span>
</div>
