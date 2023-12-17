<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - April 7</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>

<body>
    <div>
        <!-- component -->
        <style>
            @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
        </style>
        <style>
            /*
module.exports = {
    plugins: [require('@tailwindcss/forms'),]
};
*/
            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
                display: inline-block;
                vertical-align: middle;
                background-origin: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                flex-shrink: 0;
                border-radius: 100%;
                border-width: 2px;
            }

            .form-radio:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            @media not print {
                .form-radio::-ms-check {
                    border-width: 1px;
                    color: transparent;
                    background: inherit;
                    border-color: inherit;
                    border-radius: inherit;
                }
            }

            .form-radio:focus {
                outline: none;
            }

            .form-select {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
                background-repeat: no-repeat;
                padding-top: 0.5rem;
                padding-right: 2.5rem;
                padding-bottom: 0.5rem;
                padding-left: 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                background-position: right 0.5rem center;
                background-size: 1.5em 1.5em;
            }

            .form-select::-ms-expand {
                color: #a0aec0;
                border: none;
            }

            @media not print {
                .form-select::-ms-expand {
                    display: none;
                }
            }

            @media print and (-ms-high-contrast: active),
            print and (-ms-high-contrast: none) {
                .form-select {
                    padding-right: 0.75rem;
                }
            }
        </style>

        <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 pb-10 pt-16">
            <form id="paymentForm" class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px">
                <div class="w-full pt-1 pb-5">
                    <div
                        class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                        <i class="mdi mdi-credit-card-outline text-3xl"></i>
                    </div>
                </div>
                <div class="mb-10">
                    <h1 class="text-center font-bold text-xl uppercase">Secure payment info</h1>
                </div>
                <div class="mb-3 flex -mx-2">
                    <div class="px-2">
                        <label for="type1" class="flex items-center cursor-pointer">
                            <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type"
                                id="type1" checked>
                            <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png"
                                class="h-8 ml-3">
                        </label>
                    </div>
                    <div class="px-2">
                        <label for="type2" class="flex items-center cursor-pointer">
                            <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type"
                                id="type2">
                            <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png"
                                class="h-8 ml-3">
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Email</label>
                    <div>
                        <input
                            class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                            placeholder="Jexample.me@gmail.com" type="email" id="email-address" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Amount</label>
                    <div>
                        <input
                            class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                            placeholder="1000" type="tel" id="amount" value="{{ $amount }}" required/>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">First Name</label>
                        <div>
                            <input
                                class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                placeholder="Smith" type="text" id="first-name" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Last Name</label>
                        <div>
                            <input
                                class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                placeholder="John" type="text" id="last-name" required/>
                        </div>
                    </div>
                </div>

                <div>
                    <button onclick="payWithPaystack()"
                        class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i
                            class="mdi mdi-lock-outline mr-1"></i> PAY {{ $amount }} NOW</button>
                </div>
            </form>
        </div>

        <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
        <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
            <div>
                <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank"
                    class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                    <img class="object-cover object-center w-full h-full rounded-full"
                        src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg" />
                </a>
            </div>
        </div>
    </div>




    {{-- <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a> --}}
    {{-- <form id="paymentForm">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email-address" required />
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="tel" id="amount" required />
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" />
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" />
        </div>
        <div class="form-submit">
            <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form> --}}

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
                    alert(message);
                }
            });

            handler.openIframe();
        }
    </script>

    @livewireScripts
</body>

</html>
