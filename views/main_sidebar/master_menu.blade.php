<ul class="menu sidebar-menu">
    @if ($menu->getLabel())
    <li class="header">
        {{$menu->getLabel()}}
    </li>
    @endif
    @foreach($menu->getItems() as $item)
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME.'::main_sidebar.menu_item')
    @endforeach
</ul>