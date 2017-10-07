<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{route('index')}}">
                Milion
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{route('index')}}">Αρχική</a></li>
                <li><a href="{{route('theory.index')}}">Θεωρία</a></li>
                <li><a href="{{route('dataset.index')}}">Διαθέσιμοι πίνακες</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{route('contact')}}">Επικοινωνία</a></li>
                    <li><a href="{{route('about')}}">Σχετικά με εμάς</a></li>
                    <li><a href="{{ url('/login') }}">Σύνδεση</a></li>
                    <li><a href="{{ url('/register') }}">Εγγραφή</a></li>
                @else

                    <li><a href="{{route('contact')}}">Επικοινωνία</a></li>
                    <li><a href="{{route('about')}}">Σχετικά με εμάς</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Αποσύνδεση</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
