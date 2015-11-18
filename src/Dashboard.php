<?php

namespace HieuLe\LaravelDashboard;

use HieuLe\BodyClasses\Body;
use HieuLe\LaravelMenu\MenuManager;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Routing\Router;

class Dashboard
{
    const PLUGIN_NAME = 'laravel_dashboard';

    /**
     * @var Repository
     */
    protected $config;

    /**
     * The title of the current page
     *
     * @var string
     */
    protected $pageTitle;

    /**
     * The dashboard body classes
     *
     * @var Body
     */
    protected $bodyClasses;

    /**
     * @var MenuManager
     */
    protected $menuManager;

    /**
     * @var Router
     */
    protected $router;

    /**
     * The name of the current breadcrumb
     *
     * @var string
     */
    protected $breadcrumbName;

    /**
     * The param to generate the current breadcrumb
     *
     * @var array
     */
    protected $breadcrumbParams = [];

    /**
     * Dashboard constructor.
     *
     * @param Repository  $config
     * @param MenuManager $menuManager
     * @param Router      $router
     */
    public function __construct(Repository $config, MenuManager $menuManager, Router $router)
    {
        $this->config = $config;
        $this->menuManager = $menuManager;
        $this->router = $router;
        $this->bodyClasses = new Body();

        $this->bodyClasses->addClasses('admin');
    }

    /**
     * Get the title of the current page
     *
     * @return mixed
     */
    public function getPageTitle()
    {
        return $this->pageTitle ?: '';
    }

    /**
     * Set the title of the current page
     *
     * @param mixed $pageTitle
     *
     * @return Dashboard
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get the body class object
     *
     * @return Body
     */
    public function getBodyClasses()
    {
        return $this->bodyClasses;
    }

    /**
     * Get the sidebar menu
     *
     * @return \HieuLe\LaravelMenu\Menu
     */
    public function getSidebarMenu()
    {
        return $this->menuManager->menu(static::PLUGIN_NAME . '.sidebar');
    }

    /**
     * @return string
     */
    public function getBreadcrumbName()
    {
        return $this->breadcrumbName ?: $this->router->currentRouteName();
    }

    /**
     * @param string $breadcrumbName
     *
     * @return Dashboard
     */
    public function setBreadcrumbName($breadcrumbName)
    {
        $this->breadcrumbName = $breadcrumbName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBreadcrumbParams()
    {
        return $this->breadcrumbParams;
    }

    /**
     * @param array $breadcrumbParams
     *
     * @return Dashboard
     */
    public function setBreadcrumbParams(array $breadcrumbParams)
    {
        $this->breadcrumbParams = $breadcrumbParams;

        return $this;
    }

    /**
     * Current Admin LTE layout
     *
     * @return string|null
     */
    public function getLayout()
    {
        return $this->config->get(static::PLUGIN_NAME . '.layout');
    }

    /**
     * Have a collapsed sidebar upon loading or not
     *
     * @return bool
     */
    public function isSidebarCollapse()
    {
        return (bool)$this->config->get(static::PLUGIN_NAME . '.sidebar_collapse');
    }

    /**
     * Get the current skin color
     *
     * @return string|null
     */
    public function getSkin()
    {
        return $this->config->get(static::PLUGIN_NAME . '.skin');
    }

    /**
     * Show the mini sidebar when the sidebar collapsed or not
     *
     * @return bool
     */
    public function useMiniSidebar()
    {
        return (bool)$this->config->get(static::PLUGIN_NAME . '.mini_sidebar');
    }

    public function getControlSidebarTheme()
    {
        return $this->config->get(static::PLUGIN_NAME . '.control_sidebar_theme');
    }

    /**
     * Get JSON object of the Admin LTE javascript option array
     *
     * @return string
     *
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#adminlte-options
     */
    public function getAdminLteJsOptions()
    {
        return json_encode($this->config->get(static::PLUGIN_NAME . '.lte_js', []));
    }

}
