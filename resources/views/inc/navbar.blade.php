<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand fcast-text">Grototo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link fcast-text" href="forecasts">Forecasts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fcast-text" href="results">Results</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fcast-text" href="top">Top</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fcast-text" href="users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fcast-text" href="team">Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fcast-text" href="games">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fcast-text" href="events">Events</a>
            </li>

        <!-- Right Side Of Navbar -->
        {{--  <ul class="navbar-nav ml-auto">  --}}
                <!-- Authentication Links -->
                @guest
                    {{--  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>  --}}
                @else
                    <li class="nav-item dropdown user-right">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            {{--  </ul>  --}}
        </ul>
    </div>
</nav>