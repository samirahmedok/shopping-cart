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
            <a class="navbar-brand" href="{{url('/')}}">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('add.show')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     Shopping Cart ({{session()->has('cart') ? session()->get('cart')->totalqty : '0'}})
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 
                        @if (Auth::check())
                          {{auth::user()->name}}
                        @else
                          User Account
                          @endif
                     <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        
                        <li role="separator" class="divider"></li>
                        @if(Auth::check())
                <li class="nav-item">
                    
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>