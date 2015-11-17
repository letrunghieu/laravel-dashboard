<ul class="menu submenu treeview">
    @foreach($menu->getItems() as $item)
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME.'::menu_item')
    @endforeach
</ul>