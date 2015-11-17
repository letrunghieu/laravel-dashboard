<?php

return [
    /*
     * Layout options:
     *
     * + fixed            : get a fixed header and sidebar
     * + layout-boxed     : get a boxed layout that stretches only to 1250px
     */
    'layout'                => 'fixed',

    /*
     * Have a collapsed sidebar upon loading
     */
    'sidebar_collapse'      => false,

    /*
     * Show mini sidebar when collapsed
     */
    'mini_sidebar'          => true,

    /*
     * The skin color, available values:
     *
     * + skin-blue
     * + blue-light
     * + yellow
     * + yellow-light
     * + green
     * + green-light
     * + purple
     * + purple-light
     * + red
     * + red-light
     * + black
     * + black-light
     */
    'skin'                  => 'blue',

    /*
     * The color theme of the control sidebar, available values are 'dark' or 'light'.
     *
     * To toggle the control sidebar, add the data attribute `data-toggle="control-sidebar"` to any button.
     */
    'control_sidebar_theme' => 'dark',

    /*
     * Admin LTE javascript options
     *
     * See: https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#adminlte-options
     */
    'lte_js'                => [
        'navbarMenuSlimscroll'      => true,
        'navbarMenuSlimscrollWidth' => '3px',
        'navbarMenuHeight'          => '200px',
        'animationSpeed'            => 500,
        'sidebarToggleSelector'     => "[data-toggle='offcanvas']",
        'sidebarPushMenu'           => true,
        'sidebarSlimScroll'         => true,
        'sidebarExpandOnHover'      => false,
        'enableBoxRefresh'          => true,
        'enableBSToppltip'          => true,
        'BSTooltipSelector'         => "[data-toggle='tooltip']",
        'enableFastclick'           => true,
        'enableControlSidebar'      => true,
        'controlSidebarOptions'     => [
            'toggleBtnSelector' => "[data-toggle='control-sidebar']",
            'selector'          => '.control-sidebar',
            'slide'             => true,
        ],
        'enableBoxWidget'           => true,
        'boxWidgetOptions'          => [
            'boxWidgetIcons'     => [
                'collapse' => 'fa-minus',
                'open'     => 'fa-plus',
                'remove'   => 'fa-times',
            ],
            'boxWidgetSelectors' => [
                'remove'   => "[data-widget='remove']",
                'collapse' => "[data-widget='collapse']",
            ],
        ],
        'directChat'                => [
            'enable'                => true,
            'contactToggleSelector' => "[data-widget='chat-pane-toggle']",
        ],
        'colors'                    => [
            'lightBlue' => '#3c8dbc',
            'red'       => '#f56954',
            'green'     => '#00a65a',
            'aqua'      => '#00c0ef',
            'yellow'    => '#f39c12',
            'blue'      => '#0073b7',
            'navy'      => '#001F3F',
            'teal'      => '#39CCCC',
            'olive'     => '#3D9970',
            'lime'      => '#01FF70',
            'orange'    => '#FF851B',
            'fuchsia'   => '#F012BE',
            'purple'    => '#8E24AA',
            'maroon'    => '#D81B60',
            'black'     => '#222222',
            'gray'      => '#d2d6de',
        ],
        'screenSizes'               => [
            'xs' => 480,
            'sm' => 768,
            'md' => 992,
            'lg' => 1200,
        ],
    ],
];
