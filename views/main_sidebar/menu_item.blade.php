@if ($item['item'] instanceof \HieuLe\LaravelMenu\Menu)
    <li class="menuitem treeview {{ app('menu.manager')->isActive($item) ? 'active' : '' }}">
        <a href="#">
            {!! $item['before'] !!}
            <span>{{ $item['item']->getLabel() }}</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME.'::main_sidebar.sub_menu', ['menu' => $item['item']])
    </li>
@else
    <li class="menuitem item {{ app('menu.manager')->isActive($item) ? 'active' : '' }}">
        <a href="{{ $item['item']['url']  }}">
            {!! $item['before'] !!}
            <span>{{ $item['item']['text'] }}</span>
            {!! $item['after'] !!}
        </a>
    </li>
@endif

