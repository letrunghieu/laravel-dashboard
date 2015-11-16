<!DOCTYPE html>
<html class="no-js" lang="{{ L10n::getCurrentLocale() }}">
<head>
    @include('laravel_dashboard::partials.head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.8/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet"
          href="//cdn.datatables.net/plug-ins/1.10.8/integration/font-awesome/dataTables.fontAwesome.css"/>
    <link rel="stylesheet" href="{{ elixir('css/admin.css') }}">

    @yield('head-scripts')

</head>
<body class="admin skin-black-light fixed {{ empty($bodyClasses) ? "" : implode(' ', $bodyClasses) }}">
    <div class="wrapper">
        @include('laravel_dashboard::partials.back.top')

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="header">
                        @lang('sidebar.menu_header')
                    </li>
                    <li>
                        <a href="#">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview {{ active_class(if_route(['acp.users.list']))  }}">
                        <a href="#">
                                    <span>
                                        @lang('sidebar.users.all_users')
                                    </span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ active_class(if_route(['acp.users.list']) && !if_query('view', 'trashed'))  }}">
                                <a href="{{route('acp.users.list')}}">
                                    @lang('sidebar.users.all_active_users')
                                </a>
                            </li>
                            <li class="{{active_class(if_route(['acp.users.list']) && if_query('view', 'trashed'))}}">
                                <a href="{{route('acp.users.list')}}?view=trashed">
                                    @lang('sidebar.users.all_inactive_users')
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    @yield('title')
                </h1>
            </section>

            <section class="content">
                <div class='container'>
                    {!! Alert::dump($errors->all()) !!}
                </div>
                @yield('content')
            </section>
        </div>

        <div id='wrap0'>

        </div>

        @include('laravel_dashboard::partials.back.foot')
    </div>
</body>
</html>