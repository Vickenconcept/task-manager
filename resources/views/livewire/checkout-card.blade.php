<div id="summary" class="md:w-2/6 lg:w-1/4 w-full px-8 py-10" wire:poll="realTotal" x-data="{ isOpen: false }">
    <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
    <div class="flex justify-between mt-10 mb-5">
        <span class="font-semibold text-sm uppercase">Items {{ count($products) }}</span>
        <span class="font-semibold text-sm">{{ $total }}$</span>
    </div>
    <form id="paymentForm" x-show="isOpen" style="display: none">


        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Email</label>
            <div>
                <input
                    class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                    placeholder="Jexample.me@gmail.com" type="email" id="email-address" required />
            </div>
        </div>
        <div class="mb-3">
            <div>
                <input
                    class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                    placeholder="1000" type="hidden" id="amount" value="{{ $total }}" required />
            </div>
        </div>

        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">First Name</label>
            <div>
                <input
                    class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                    placeholder="Smith" type="text" id="first-name" required />
            </div>
        </div>
        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Last Name</label>
            <div>
                <input
                    class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                    placeholder="John" type="text" id="last-name" required />
            </div>
        </div>

        <div>
            <button onclick="payWithPaystack()"
                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i
                    class="mdi mdi-lock-outline mr-1"></i> PAY {{ $total }} NOW</button>
        </div>
    </form>
    {{-- <div>
        <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
        <select class="block p-2 text-gray-600 w-full text-sm">
            <option>Standard shipping - $10.00</option>
        </select>
    </div> --}}
    <div class="border-t mt-8" x-show="!isOpen">
        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>Total cost</span>
            <span>${{ $total }}</span>
        </div>

        <button wire:click="realTotal" @click="isOpen=true" @if ($total == 0) disabled @endif
            class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full px-3">Checkout</button>


        <script src="https://js.paystack.co/v1/inline.js"></script>

        <script>
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener("submit", payWithPaystack, false);

            function payWithPaystack(e) {
                e.preventDefault();

                let handler = PaystackPop.setup({
                    key: 'pk_test_a683d1e021670d61207a3fb1241bf4d23c92ca40', // Replace with your public key
                    email: document.getElementById("email-address").value,
                    amount: document.getElementById("amount").value * 100,
                    ref: '' + Math.floor((Math.random() * 1000000000) +
                        1
                    ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    // label: "Optional string that replaces customer email"
                    onClose: function() {
                        alert('Window closed.');
                    },
                    callback: function(response) {
                        let message = 'Payment complete! Reference: ' + response.reference;
                        // alert(message);


                        @this.dispatch('paymentSuccess', {
                            reference: response.reference
                        });

                        setInterval(() => {
                            location.reload();
                        }, 1000);

                    }
                });

                handler.openIframe();
            }
        </script>
    </div>
</div>
