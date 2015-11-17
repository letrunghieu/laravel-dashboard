@if ($item['item'] instanceof \HieuLe\LaravelMenu\Menu)
    <li class="menuitem treeview {{ app('menu.manager')->isActive($item) ? 'active' : '' }}">
        <a href="#">
            {!! $item['before'] !!}
            {{ $item['item']->getLabel()  }}
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        @include(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME.'::main_sidebar.sub_menu', ['menu' => $item['item']])
    </li>
@else
    <li class="menuitem item {{ app('menu.manager')->isActive($item) ? 'active' : '' }}">
        <a href="{{ $item['item']['url']  }}">
            {!! $item['before'] !!}
            {{ $item['item']['text']  }}
            {!! $item['after'] !!}
        </a>
    </li>
@endif

