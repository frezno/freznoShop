<!-- Top Navigation -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/admin') }}">FreznoShop Admin</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <!-- Left Side of Top Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/admin') }}"> Dashboard</a></li>
            </ul>

            <!-- Right Side of Top Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Logout Link, shown if user is logged in -->
                @if (! Auth::guest())
                    <li><a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                             Logout <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
