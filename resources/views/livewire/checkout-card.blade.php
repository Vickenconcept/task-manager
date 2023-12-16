<div id="summary" class="w-1/4 px-8 py-10" wire:poll="realTotal">
    <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
    <div class="flex justify-between mt-10 mb-5">
        <span class="font-semibold text-sm uppercase">Items {{ count($products) }}</span>
        <span class="font-semibold text-sm">{{ $total }}$</span>
    </div>
    {{-- <div>
        <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
        <select class="block p-2 text-gray-600 w-full text-sm">
            <option>Standard shipping - $10.00</option>
        </select>
    </div> --}}
    <div class="border-t mt-8">
        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>Total cost</span>
            <span>${{ $total }}</span>
        </div>
        <button wire:click="realTotal"
            class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
    </div>
</div>
