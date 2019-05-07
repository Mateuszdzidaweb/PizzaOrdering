<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.view')}}">Pizza</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ 'shop.shopping-cart' }}">Cart
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity: '' }}</span>
                </a>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.logout')}}">Log out</a>
                </li>
            @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.singup') }}">Create Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.singin')}}">Log in</a>
                    </li>
            @endif
        </ul>
    </div>
</nav>