<x-guest-layout>

  <!-- login -->
  <div class="container login">
      <div class="row">
          <div class="col-md-4" id="side1">
              <h3>Hello Friend!</h3>
              <p>Create New Account</p>
              <a href="{{ route('register') }}" style="text-decoration: none; color:white"><div id="btn">Sign up</div></a>
          </div>
          <form class="col-md-8" id="side2" action="{{ route('auth.login') }}" method="POST">
              <h3>Login Account</h3>
              @if (session()->has('invalidCredential'))
                  <div class="bg-arlert" role="alert">
                      {{ session('invalidCredential') }}
                  </div>
              @endif
              <div class="inp">
                  @csrf
                  <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}"
                      type="email" autocomplete="email" >
                  @error('email')
                      <span class="text-xs text-red-400">{{ $message }}</span>
                  @enderror
                  <input type="password" placeholder="Password" id="password" name="password" type="password"
                      autocomplete="current-password" >
                  @error('password')
                      <span class="text-xs text-red-400">{{ $message }}</span>
                  @enderror
              </div>
              <p>Forgot Your Password</p>
              <div class="icons">
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-instagram"></i>
              </div>
              <div id="login"><button type="submitt">LOG IN</button></div>
          </form>
      </div>
  </div>
  <!-- login -->
 


  </div>
</x-guest-layout>
