<x-app-layout>
        <!-- banner -->
        <div class="banner2">
            <div class="content2">
                <h1>Get More Product</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, animi?</p>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero eius ipsam incidunt illum totam nostrum quidem sit cumque fugit. Accusamus rem praesentium labore tempore ullam porro quaerat fugiat cum ipsum, sint perferendis voluptate ad, quod reiciendis officia! In voluptate quae expedita sunt eum placeat alias soluta. Rem commodi, impedit error doloribus ratione at provident beatae, aut doloremque sunt possimus voluptas recusandae nam aliquid eos quia minus harum repellat quae eveniet laborum dolore esse voluptate sed. Voluptate ullam dolor sapiente neque labore hic nam odio qui consectetur porro minima nesciunt suscipit vitae obcaecati reiciendis itaque ipsum unde, debitis nemo soluta!</p>
    
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