@extends('layouts.app')

@section('content')
<link href="/css/app.css" rel="stylesheet"> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="background-color:white">
                
                <img src="{{ URL('storage/images/frenol.jpg') }}" alt="" title="" width="150" height="150">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder ="password"" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-xm-8  ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <span> 
                                    
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot password?') }}
                                    </a>
                                @endif
                                </span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            
                                <button type="submit" class="btn btn-light">
                                    {{ __('sign in') }}
                                </button>


                        </div>
                        <div class="row mb-2">
            @guest


                            @if (Route::has('register'))
                                <button type="button" class="btn btn-outline-info">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </button>
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        </div>
                            <div class="row mb-0">
                            
                                <button  class="btn btn-info">
                                    {{ __('sign in with google') }}
                                </button>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
