<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('userpage')}}"> Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{Request::is('login') ? "active":""}}"><a href="{{route('userpage')}}">Home <span class="sr-only">(current)</span></a></li>
                    <li class="{{Request::is('about') ? "active":""}}"><a href="{{route('about')}}">About <span class="sr-only">(current)</span></a></li>
                    <li class="{{Request::is('contact') ? "active":""}}"><a href="{{route('contact')}}">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                @if(Auth::Check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('posts.create')}}">New Blog</a></li>

                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('logout')}}">Sign Out</a></li>
                        </ul>
                    </li>
                    @else
                        <a class="btn btn-default btn-lg" href="{{route('signin')}}">Sign In or Sign Up First</a>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>