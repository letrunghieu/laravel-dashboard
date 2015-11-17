<?php

class DashboardTest extends \Orchestra\Testbench\TestCase
{
    public function testDefaultConfig()
    {
        /** @var \HieuLe\LaravelDashboard\Dashboard $dashboard */
        $dashboard = $this->app->make(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME);

        $defaultLteConfig = [
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
        ];

        $this->assertSame('blue', $dashboard->getSkin());
        $this->assertSame('fixed', $dashboard->getLayout());
        $this->assertSame(false, $dashboard->isSidebarCollapse());
        $this->assertSame(false, $dashboard->useMiniSidebar());
        $this->assertSame('dark', $dashboard->getControlSidebarTheme());
        $this->assertSame(json_encode($defaultLteConfig), $dashboard->getAdminLteJsOptions());
    }

    protected function getPackageProviders($app)
    {
        return [
            \HieuLe\LaravelDashboard\LaravelDashboardServiceProvider::class,
        ];
    }
}