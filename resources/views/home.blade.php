<x-app-layout>

    <!-- home content -->
    <section class="home">
        <div class="content">
            <h3>Biggest Clothe Sale
                <br> <span>Up To 50% Off</span>
            </h3>
            <p>Unleash Your Shopping Frenzy at April 7: Elevate Your Style,
                Ignite Your Passion, and Shop the Extraordinary way!</p>
            <a href="{{ route('products.index') }}"><button id="shopnow">Shop Now</button></a>
        </div>
        <div class="img" style="">
            <img src="{{ asset('images/p2.png') }}" alt="">
        </div>
    </section>
    <!-- home content -->
    </div>
    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">

            @forelse ($products as $key => $product)
                <div class="col-md-5 py-3 py-md-0">
                    <div class="card" style="background-color: #a9a9a926;">
                        <img src="{{ $product->image }}" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-titel">{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                            <p><strong>${{ $product->price }} <strike>$250.10</strike></strong></p>
                            <a href="{{ route('products.show',['product'=> $product]) }}"><button>Order Now</button></a>
                        </div>
                    </div>
                </div>
                @if ($loop->index == 1)
                    {{-- This checks if it's the second iteration --}}
                @break
            @endif
        @empty
            <p>No Product yet</p>
        @endforelse

        
    </div>
</div>
<!-- top cards -->


<!-- banner -->
<div class="banner">
    <div class="content">
        <h1>Get Up To 50% Off</h1>
        <p>Discover more must-have items! Elevate your look and shop now for the latest in fashion.</p>
        <a href="{{ route('products.index') }}">
            <div id="bannerbtn"><button>SHOP NOW</button></div>
        </a>
    </div>
</div>
<!-- banner -->

<!-- product cards -->
<div class="container" id="product-cards">
    <h1 class="text-center">PRODUCT</h1>
    <div class="row" style="margin-top: 30px;">
        @forelse ($products as $product)
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="{{ $product->image }}" alt="">
                    <div class="card-body">
                        <h3>{{ $product->name }}</h3>
                        <p class="line-clamp-1">{{ $product->description }}</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>${{ $product->price }} <strike>$50</strike> <span><a
                                    href="{{ route('products.show', ['product' => $product]) }}"><i
                                        class="fa-solid fa-cart-shopping"></i></a></span></h5>
                    </div>
                </div>
            </div>
        @empty
            <p>No Product yet</p>
        @endforelse

    </div>

    <a href="{{ route('products.index') }}" id="viewmorebtn">View More</a>
</div>
<!-- product cards -->

<!-- product -->
<div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
    <p>Introducing Seventhapril – your style essentials redefined. Explore a curated collection of high-quality clothing, shoes, and wristwatches designed to empower your unique expression. Elevate your fashion effortlessly with Seventhapril, where every piece celebrates your individual style. Welcome to a world where style knows no limits.</p>

    <hr>
</div>
<!-- product -->


<!-- offer -->
<div class="container" id="offer">
    <div class="row">
        <div class="col-md-4 py-3 py-md-0">
            <i class="fa-solid fa-cart-shopping"></i>
            <h5>Free Shipping</h5>
            <p>On order over $100</p>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <i class="fa-solid fa-truck"></i>
            <h5>Fast Delivery</h5>
            <p>World wide</p>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <i class="fa-solid fa-thumbs-up"></i>
            <h5>Big Choice</h5>
            <p>Of product</p>
        </div>
    </div>
</div>
<!-- offer -->

</x-app-layout>
