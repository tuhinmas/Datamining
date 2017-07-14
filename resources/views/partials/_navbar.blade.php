<nav class="navbar navbar-inverse navbar-fixed-top footer-fixed0">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">Αρχική</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{route('theory')}}">Θεωρία</a></li>
            </ul>

            {{--right--}}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('contact')}}">Επικοινωνία</a></li>
                <li><a href="{{route('about')}}">Σχετικά με εμάς</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>