<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('acp.home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>P</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Property</b>Portal</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            {{ trans('home.top.hello', ['name' => (Auth::user()->name ? : Auth::user()->email)]) }}
                        </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('home')}}" class="btn btn-default btn-flat">
                                    {{ trans('home.admin.top.show_home') }}
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('auth.sign_out') }}" class="btn btn-default btn-flat">
                                    {{trans('home.top.sign_out')}}
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>