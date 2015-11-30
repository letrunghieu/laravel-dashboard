<!DOCTYPE html>
<html class="no-js">
<?php
$dashboard = app(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME);
?>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $dashboard->getPageTitle() }}</title>

    @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . "::partials.head_assets")

    <script>
        var AdminLTEOptions = {!! $dashboard->getAdminLteJsOptions() !!};
    </script>
</head>
<body class="{{ $dashboard->getBodyClasses()->getClasses() }} skin-{{$dashboard->getSkin()}} {{$dashboard->getLayout()}} {{$dashboard->isSidebarCollapse() ? 'sidebar-collapse' : ''}} {{$dashboard->useMiniSidebar() ? 'sidebar-mini' : ''}}">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . "::partials.logo")

                <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . "::partials.top_nav")
        </nav>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . "::partials.main_sidebar")
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('title')
            </h1>
            @if (array_key_exists('DaveJamesMiller\Breadcrumbs\ServiceProvider', app()->getLoadedProviders()))
                {!! app('breadcrumbs')->renderIfExistsArray($dashboard->getBreadcrumbName(), $dashboard->getBreadcrumbParams()) !!}
            @endif
        </section>

        <section class="content">
            <div class='app-alerts'>
                {!! app('alert')->dump($errors->all()) !!}
            </div>
            @yield('content')
        </section>
    </div>


    <footer class="main-footer">
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME. "::partials.footer")
    </footer>

    <!-- The Right Sidebar -->
    <aside class="control-sidebar control-sidebar-{{$dashboard->getControlSidebarTheme()}}">
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . "::partials.control_sidebar")
    </aside>
    <div class="control-sidebar-bg"></div>

    @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . "::partials.foot_assets")
</div>
</body>
</html>