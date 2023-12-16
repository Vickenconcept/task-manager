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

<body>
    <nav class="text-gray-50 bg-blue-950 px-2 md:px-10 py-1">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt=""
                width="180px"></a>
    </nav>
    <div class="py-10 space-y-5 mx-auto w-[80%]">
        <h1 class="text-2xl font-semibold tracking-widest underline">Products</h1>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 ">
            @foreach ($products as $product)
                <div class="max-w-sm  overflow-hidden shadow-lg rounded-lg  hover:shadow">
                    <a href="{{ route('products.show', ['product' => $product]) }}">
                        <img class="w-full" src="{{ asset('images/p13.png') }}" alt="Sunset in the mountains">
                    </a>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                        <p class="text-gray-700 text-base line-clamp-2">
                            {{ $product->description }}
                        </p>
                        <p class="text-gray-500 mt-2 font-semibold italic">
                            ${{ $product->price }}
                        
                        </p>
                        <div class="flex justify-between border-t">
                           <div class="flex">
                            @if ($product->best_selling == 1)
                                
                            <form action="{{ route('product.best',['product'=> $product]) }}" method="post">
                                @csrf
                                <input type="hidden" name="best_selling" value="0">
                                <button class="submit"><i class="bx bxs-heart text-red-500 text-xl "></i></button>
                            </form>
                            @else
                            <form action="{{ route('product.best',['product'=> $product]) }}" method="post">
                                @csrf
                                <input type="hidden" name="best_selling" value="1">
                                <button><i class="bx bx-heart text-red-500 text-xl "></i></button>
                            </form>
                            @endif
                           </div>

                          <div  class="flex">
                            <form action="{{ route('products.destroy',['product'=> $product]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="bx bx-x text-red-500 text-xl "></i></button>
                            </form>
                            <button><i class="bx bx-edit text-green-500 text-xl "></i></button>
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
