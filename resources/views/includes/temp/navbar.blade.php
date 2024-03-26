<nav class="navbar navbar-expand-md" style="background:#2e4925">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a style="color:white" class="nav-link" href="{{route('order')}}">{{__('languge.ORDERS')}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a style="color:white"   class="nav-link" href="{{route('section')}}">{{__('languge.SECTIONS')}}</a>
                    </li>
                </ul>


                <div class="dropdown navbar-nav" style="color:white" >
                    <button style="height: 35px;color:white" class="btn btn-succes active  mt-4" type="button" data-toggle="dropdown" aria-expanded="false">
                        {{__('languge.LANGUGE')}}

                    </button>
                    <div class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a  class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                    @endforeach
                    </div>
                  </div>







                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </ul>
        </div>
    </div>
</nav>
