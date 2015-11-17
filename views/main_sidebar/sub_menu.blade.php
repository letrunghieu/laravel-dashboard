<ul class="menu submenu treeview-menu">
    @foreach($menu->getItems() as $item)
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME.'::main_sidebar.menu_item')
    @endforeach
</ul>