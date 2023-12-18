<x-app-layout>
        <!-- banner -->
        <div class="banner2">
            <div class="content2">
                <h1>Get More Product</h1>
                <p>Explore our latest arrivals for an elevated shopping experience. Upgrade your style today!</p>
                <div id="bannerbtn2"><button>SHOP NOW</button></div>
            </div>
        </div>
        <!-- banner -->
    
        <!-- product cards -->
        <div class="container" id="product-cards">
            <div class="row" style="margin-top: 30px;">
                @foreach ($products as $product )
                    
                <div class="col-md-3 py-3 py-md-0 ">
                    <div class="card mt-3">
                        <!-- <img src="img/p1.png" alt=""> -->
                        <img src="{{ $product->image }}" alt="image">
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
                            <h5>${{ $product->price }} <strike>$15.5</strike> <span><a href="{{ route('products.show',['product'=> $product]) }}"><i class="fa-solid fa-cart-shopping"></i></a></span></h5>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
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