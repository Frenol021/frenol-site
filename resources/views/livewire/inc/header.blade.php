<div class="container">
    <header class="header">
        <a class="navbar-brand" href="">FrenolSite
       <!--<span> <img src="{{ URL('storage/images/frenol.jpg') }}" alt="" title="" width="100" height="100"></span>-->
        </a>
        <ul class="navs">

            <li>
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>

            <li class="active"><a href="#">Help</a></li>
            <li class="active"><a href="#">products</a>
            <ul class="products-list">
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Computer Accessories</a></li>
            <li><a href="#">Data storage</a></li>
            </ul>
            </li>
            <li class="active"><a href="#">Cart</a></li>
            <li class="active"><a href="#">Wishlist</a></li>
            <li>
                       @guest
                            @if (Route::has('login'))

                                    <a class="na" href="{{ route('login') }}">{{ __('Account') }}</a>

                            @endif
                                                    @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <li>
                         @endguest
            </li>
        </ul>

    </header>
</div>
