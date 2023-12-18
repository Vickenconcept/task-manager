<x-tailwind-layout>
    <div class=" py-20">

        <div class="mx-auto w-[80%] overflow-x-auto">
            <div>
                <h1 class="text-2xl font-bold tracking-wider text-gray-700">Total Orders</h1>
                <p class="py-3">Total: <span class="px-2 py-0.5 text-xs  text-blue-800 bg-blue-200 rounded-full">{{ count($orders) }}</span></p>
            </div>
            <hr> 
            <table class="w-full table ">
                <thead>
                    <tr class="text-left border-b-2 shadow-md ">
                        <th class="text-gray-700 font-semibold py-3 uppercase text-sm pl-10">S/N</th>
                        <th class="text-gray-700 font-semibold py-3 uppercase text-sm ">Customer</th>
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
                            <th class="text-gray-700 font-normal capitalize text-sm pl-10 font-semibold ">
                                {{ $loop->iteration }}
                            </th>
                            <th class="text-gray-700 font-normal capitalize text-sm ">
                                {{ $order->user->name }}
                            </th>
                            <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->order_id }}</th>
                            <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->amount }}</th>
                            <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->quantity }}</th>
                            <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->created_at }}
                            </th>
                            <th class="text-gray-700 font-normal capitalize text-sm ">{{ $order->status }}</th>
                            <th class="text-gray-700 font-normal capitalize text-sm pr-10">
                                <form action="{{ route('order.update', ['order' => $order]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" id="" onchange="this.form.submit()">
                                        <option @if ($order->status == 'pending') selected @endif value="pending">
                                            pending</option>
                                        <option @if ($order->status == 'delivered') selected @endif value="delivered">
                                            delivered</option>
                                    </select>
                                </form>
    
                                {{-- <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div
                                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300   peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    </div>
                                </label> --}}
    
    
                            </th>
                        </tr>
                    @empty
    
                        <tr class="border-b-2 shadow-md">
                            <td class="text-gray-700 font-normal text-sm p-10 text-center" colspan="6">No pending
                                order available...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-tailwind-layout>


