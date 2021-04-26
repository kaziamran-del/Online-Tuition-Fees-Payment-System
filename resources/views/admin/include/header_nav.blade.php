<div class="header_right" id="app-navbar-collapse">  
    
    <ul class="nav navbar-nav">
        &nbsp;
    </ul>

        <!-- Right Side Of Navbar -->
        <ul>
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-color" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
</div>  
