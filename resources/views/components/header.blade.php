  <!-- top navbar -->
  <div class="top-navbar">
      <div class="top-icons">
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram"></i>
      </div>
      <div class="other-links">
          @if (!auth()->check())
              <a href="{{ route('login') }}"><button id="btn-login">Login</button></a>
              <a href="{{ route('register') }}"> <button id="btn-signup">Sign up</button></a>
          @else
              <form action="{{ route('auth.logout') }}" method="post" style="display: inline">
                @csrf

               <button type="submit" id="btn-signup">LogOut</button>
              </form>
          @endif

          @if (auth()->check())
          <i class="fa-solid fa-user"></i>
          @endif
          <a href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
  </div>
  <!-- top navbar -->

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="" width="180px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('products.index') }}">Clothe</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                          <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                          <li><a class="dropdown-item" href="#">Hoodies</a></li>
                          <li><a class="dropdown-item" href="#">Pants</a></li>
                          <li><a class="dropdown-item" href="#">Soprts Shoes</a></li>
                          <li><a class="dropdown-item" href="#">Smart Watch</a></li>
                          <li><a class="dropdown-item" href="#">Glasess</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('about') }}">About Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                  </li>
              </ul>

              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
              </form>
          </div>
      </div>
  </nav>
  <!-- navbar -->
