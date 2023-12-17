<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>

<body x-data="{ isOpen: false }">

    <nav class="text-gray-100 bg-blue-950 px-2 md:px-10 py-1 flex items-center">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt=""
                width="180px"></a>

        <div><a href="/" class="">Home</a></div>
    </nav>
    <div class="px-20 py-10">
        <div class="py-3 text-end">
            <button @click="isOpen = true"
                class="  rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600;">Create
                Category</button>
            <a href="{{ route('home.create') }}">
                <button
                    class="  rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Create
                    Product</button>
            </a>
        </div>
        <section class="bg-blue-900 px-10 py-16 rounded-md font-sans">
            <div class="text-end"><span
                    class="text-white text-sm py-2 px-4 bg-slate-100/50 rounded-md">{{ today()->toFormattedDayDateString() }}</span>
            </div>
            <h1 class="text-white text-md font-semibold ">Good Evening Admin</h1>
            <span class="text-white text-sm font-semibold">Admin</span>
        </section>




        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-8 sm:gap-8 my-10 font-sans">
            <!-- card -->
            <div class="bg-blue-500 px-5  rounded-md ">
                <h2 class="text-white py-3">Total Products</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">{{ count($products) }}</span>
                    <a href="{{ route('products.create') }}">
                        <span
                            class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i
                                class='bx bx-detail text-xl'></i></span>
                    </a>
                </div>
            </div>
            <!-- card -->
            <div class="bg-blue-900 px-5  rounded-md ">
                <h2 class="text-white py-3">Total Categories</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">{{ count($categories) }}</span>
                        <span
                            class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i
                                class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
            <!-- card -->
            <div class="bg-blue-500 px-5 rounded-md ">
                <h2 class="text-white py-3">Total Order</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">{{ count($orders) }}</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i
                            class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
            <!-- card -->
            <div class="bg-blue-900 px-5  rounded-md ">
                <h2 class="text-white py-3">Event Created</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">30</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i
                            class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1  lg:grid-cols-4 gap-y-8 lg:gap-x-8 my-10 font-sans">
            <div class="col-span-3 bg-white  rounded-md">
                <div class="flex flex-row justify-between">
                    <h2 class="text-gray-700 font-semibold p-10">Incomplete Order</h2>
                    <a href="#" class="text-red-400 text-xs p-10">
                        <i class="bx bx-signal-5 text-left my-auto text-yellow-400"></i>
                        View All Order
                    </a>
                </div>
                <table class="w-full table table-fixed">
                    <thead>
                        <tr class="text-left border-b-2 shadow-md ">
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm pl-10">Customer</th>
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm ">Order ID</th>
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm ">Amount</th>
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm ">QUANTITY</th>
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm ">Date</th>
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm ">Status</th>
                            <th class="text-gray-700 font-semibold py-3 uppercase text-sm pr-10">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr class="text-left border-b-2 shadow-md ">
                                <th class="text-gray-700 font-normal capitalize text-sm pl-10">{{ $order->user_id }}
                                </th>
                                <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->order_id }}</th>
                                <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->amount }}</th>
                                <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->quantity }}</th>
                                <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->created_at }}
                                </th>
                                <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->status }}</th>
                                <th class="text-gray-700 font-normal capitalize text-sm pr-10">

                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300   peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                        </div>
                                    </label>

                                </th>
                            </tr>
                        @empty

                            <tr class="border-b-2 shadow-md">
                                <td class="text-gray-700 font-normal text-sm p-10 text-center" colspan="6">No pending
                                    orer available...</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-span-1 grid grid-cols-2 lg:grid-cols-1 gap-8">
                <!-- card -->
                <div class="bg-white px-5  rounded-md  py-3 shadow h-28">
                    <h2 class="text-blue-700 pb-3 font-bold">Orders</h2>
                    <div class="flex flex-row justify-between ">
                        <div class="">
                            <div class="flex flex-row">
                                <div
                                    class="w-10 h-10 bg-blue-900 rounded-full  border  border-gray-300  overflow-hidden mr-1">
                                    {{-- <img src="{{ cloudinary_url('running_shoe') }}" alt="avatar" class="w-full object-cover"> --}}
                                </div>
                                <div>
                                    <h1 class="text-gray-700 text-sm font-semibold ">$0.00</h1>
                                    <span class="text-red-500 text-xs">Total - 0</span>
                                </div>
                            </div>
                        </div>
                        <div><i class="bx bx-signal-5 text-left my-auto  text-2xl  text-yellow-400"></i></div>
                    </div>
                </div>
                <!-- card -->
                {{-- <div class="bg-white px-5  rounded-md  py-3">
                    <h2 class="text-blue-700 pb-3 font-bold">Orders</h2>
                    <div class="flex flex-row justify-between ">
                        <div class="">
                            <div class="flex flex-row">
                                <div
                                    class="w-10 h-10 bg-blue-900 rounded-full  border  border-gray-300   overflow-hidden mr-1">
                                </div>
                                <div>
                                    <h1 class="text-gray-700 text-sm font-semibold ">$0.00</h1>
                                    <span class="text-red-500 text-xs">Total - 0</span>
                                </div>
                            </div>
                        </div>
                        <div><i class="bx bx-signal-5 text-left my-auto  text-2xl  text-green-400"></i></div>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>

    {{-- modal for guest --}}
    <div class="fixed items-center justify-center  flex top-0 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-20 z-10 transition duration-1000 ease-in-out"
        x-show="isOpen" style="display: none;">
        <div @click.away="isOpen = false"
            class="bg-white w-[70%] lg:w-[40%] shadow-inner  border rounded-lg overflow-auto  pb-6 px-5 transition-all relative duration-700">
            <div class="space-y-5 pt-5 ">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="bg-red-100 w-full p-3 space-y-1 rounded border border-red-400 text-xs text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <span class="text-xl font-bold text-gray-700">Create Category</span>
                <form action="" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <form action="{{ route('home.store') }}" method="post">

                        <div class="space-y-5">
                            <input id="name"
                                class="block px-3 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                type="text" name="name" :value="{{ old('name') }}" autofocus
                                placeholder="Category name" />

                            <input id="description"
                                class="block px-3 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                type="text" name="description" value="{{ old('description') }}" autofocus
                                placeholder="Description" />

                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                                type="submit">Update</button>
                        </div>

                    </form>
            </div>
            </form>

        </div>
    </div>
    </div>

</body>

</html>
