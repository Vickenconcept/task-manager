<x-guest-layout>
    <div class="container login">
        <div class="row">
            <div class="col-md-4" id="side1">
                <h3>Welcome Back!!</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="{{ route('login') }}" style="text-decoration: none; color:white"><div id="btn">Login</div></a>
            </div>
            <form class="col-md-8" id="side2" action="{{ route('auth.register') }}" method="POST">
                @csrf
                <h3>Create Account</h3>
                <div class="inp">
                    <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') }}"
                        type="text" autocomplete="name">
                    <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}"
                        type="text" autocomplete="email">
                    <input type="password" placeholder="Password" id="password" name="password" type="password"
                        autocomplete="current-password">
                    <input type="password" placeholder="Confirm Password" id="password_confirmation"
                        name="password_confirmation" type="password" autocomplete="current-password">
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="icons">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div id="login"><button type="submit">SIGN UP</button></div>
            </form>
        </div>
    </div>
</x-guest-layout>
