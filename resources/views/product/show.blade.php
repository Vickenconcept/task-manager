<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        css * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: #555;
        }

        p {
            color: #555;
        }

        .container {
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .col-2 {
            flex-basis: 50%;
            min-width: 300px;
        }

        .col-2 img {
            max-width: 100%;
            padding: 50px 0;
        }

        .col-2 h1 {
            font-size: 50px;
            line-height: 60px;
            margin: 25px 0;
        }

        .btn {
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
            transition: background 0.5s;
        }

        .btn:hover {
            background: #563434;

        }

        .header {
            background: radial-gradient(#fff, #ffd6d6);
        }

        .header .row {
            margin-top: 70px;
        }

        .categories {
            margin: 70px 0;
        }

        .col-3 {
            flex-basis: 30%;
            min-width: 250px;
            margin-bottom: 30px;
        }

        .col-3 img {
            width: 100%;
        }

        .small-container {
            max-width: 1080px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .col-4 {
            flex-basis: 25%;
            padding: 10px;
            min-width: 200px;
            margin-bottom: 50px;
            transition: transform 0.5s;
        }

        .col-4 img {
            width: 100%;
        }

        .title {
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height: 60px;
            color: #555;
        }

        .title::after {
            content: '';
            background: #ff523b;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        h4 {
            color: #555;
            font-weight: normal;
        }

        .col-4 p {
            font-size: 14px;
        }

        .rating .fa {
            color: #ff523b;
        }

        .col-4:hover {
            transform: translateY(-5px);

        }

        /*--------- offer --------*/
        .offer {
            background: radial-gradient(#fff, #ffd6d6);
            margin-top: 80px;
            padding: 30px 0;
        }

        .col-2 .offer-img {
            padding: 50px;
        }

        small {
            color: #555;
        }

        /*------Testimonial------*/
        .testimonial {
            padding-top: 100px;
        }

        .testimonial .col-3 {
            text-align: center;
            padding: 40px 20px;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform o.5s;
        }

        .testimonial .col-3 img {
            width: 90px;
            margin-top: 20px;
            border-radius: 50%;
        }

        .testimonial .col-3:hover {
            transform: translateY(-10px);
        }

        .fa.fa-quote-left {
            font-size: 34px;
            color: #ff523b;
        }

        .col-3 p {
            font-size: 12px;
            margin: 12px 0;
            color: #777;
        }

        .testimonial .col-3 h3 {
            font-weight: 600;
            color: #555;
            font-size: 16px;
        }

        /*-----Brands-----*/
        .brands {
            margin: 100px auto;
        }

        .col-5 {
            width: 160px;
        }

        .col-5 img {
            width: 100%;
            cursor: pointer;
        }



        ul {
            list-style-type: none;
        }


        .menu-icon {
            width: 28px;
            margin-left: 20px;
            display: none;
        }

        /*-------- All Product Page--------*/

        .row-2 {
            justify-content: space-between;
            margin: 100px auto 100px;
        }

        select {
            border: 1px solid #ff523b;
            padding: 5px;
        }

        select:focus {
            outline: none;
        }

        .page-btn {
            margin: 0 auto 80px;
        }

        .page-btn span {
            display: inline-block;
            border: 1px solid #ff523b;
            margin-left: 10px;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }

        .page-btn span:hover {
            background: #ff523b;
            color: #fff;
        }

        /*-------- Single Product Details--------*/

        .single-product {
            margin-top: 80px;
        }

        .single-product .col-2 img {
            padding: 0;
        }

        .single-product .col-2 {
            padding: 20px;
        }

        .single-product h4 {
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
        }

        .single-product select {
            display: block;
            padding: 10px;
            margin-top: 20px;
        }

        .single-product input {
            width: 50px;
            height: 40;
            padding-left: 10px;
            font-size: 20px;
            margin-right: 10px;
            border: 1px solid #ff523b;
        }

        input:focus {
            outline: none;
        }

        .single-product .fa {
            color: #ff523b;
            margin-left: 10px;
        }

        .small-img-row {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        /*-------- Cart Item --------*/

        .cart-page {
            margin: 80px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #fff;
            background: #ff523b;
            font-weight: normal;
        }

        td {
            padding: 10px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td a {
            color: #ff523b;
            font-size: 12px;
        }

        td img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #ff523b;
            width: 100%;
            max-width: 400px;
        }

        td:last-child {
            text-align: right;

        }

        th:last-child {
            text-align: right;
        }


        /*--- media query for less than 600 screen size ---*/
        @media only screen and (max-width: 600px) {
            .row {
                text-align: center;
            }

            .col-2,
            .col-3,
            .col-4 {
                flex-basis: 100%;

            }
        }

        .single-product .row {
            text-align: left;
        }

        .single-product .col-2 {
            padding: 20px 0;
        }

        .single-product h1 {
            font-size: 26px;
            line-height: 32px;

        }

        .cart-info p {
            display: none;

        }
    </style>
</head>

<body>

    {{-- <x-header /> --}}
    <div>


        <div class="container">
        </div>

        <!-------- Single Product Details --------->
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <div class="bg-red-500 h-72">
                        <img src="{{ $product->image }}" class="w-full h-full" id="ProductImg">

                    </div>

                    <div class="small-img-row mt-2">
                        <div class="small-img-col">
                            <img src="{{ $product->image }}" width="100%" class="small-img h-20">
                        </div>
                        <div class="small-img-col">
                            <img src="{{ $product->image }}" width="100%" class="small-img h-20">
                        </div>
                        <div class="small-img-col">
                            <img src="{{ $product->image }}" width="100%" class="small-img h-20">
                        </div>
                        <div class="small-img-col">
                            <img src="{{ $product->image }}" width="100%" class="small-img h-20">
                        </div>
                    </div>

                </div>
                <div class="col-2 ">
                    <h1 style="margin-left: 10px">{{ $product->name }}</h1>
                    <h4 style="margin-left: 10px">{{ $product->price }}</h4>
                    {{-- <select>
                        <option>Select size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select> --}}
                    <form action="{{ route('cart.store') }}" method="post" class="inline" style="margin-left: 10px">
                        @csrf
                        <input type="hidden" value="{{ $product->name }}" name="product_name">
                        <input type="hidden" value="{{ $product->description }}" name="description">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}" name="image">
                        <button type="submit"><a class="btn">Add To Cart</a></button>
                    </form>
                    <h3 style="margin-left: 10px">Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p style="margin-left: 10px">{{ $product->description }}</p>


                </div>
            </div>
        </div>
        <!-------- title -------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View More</p>

            </div>
        </div>

        <!-------- products -------->
        <div class="small-container">
            <div class="row">
                @foreach ($products as $product)
                    <a href="{{ route('products.show',['product'=> $product]) }}" class="col-4">
                        <img src="{{ $product->image }}">
                        <h4>{{ $product->name }}</h4>
                        <div class="rating">
                            <i class= "fa fa-star"></i>
                            <i class= "fa fa-star"></i>
                            <i class= "fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>${{ $product->price }}</p>
                    </a>
                @endforeach  
            </div>
        </div>
    </div>

</body>

</html>
