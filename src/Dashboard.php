<?php

namespace HieuLe\LaravelDashboard;

use HieuLe\BodyClasses\Body;
use Illuminate\Contracts\Config\Repository;

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
     * Dashboard constructor.
     *
     * @param Repository $config
     * @param Body       $bodyClasses
     */
    public function __construct(Repository $config, Body $bodyClasses)
    {
        $this->config = $config;
        $this->bodyClasses = $bodyClasses;

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
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
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
     * Current Admin LTE layout
     *
     * @return string|null
     */
    public function getLayout()
    {
        return $this->config->get(static::PLUGIN_NAME . 'layout');
    }

    /**
     * Have a collapsed sidebar upon loading or not
     *
     * @return bool
     */
    public function isSidebarCollapse()
    {
        return (bool)$this->config->get(static::PLUGIN_NAME . 'sidebar_collapse');
    }

    /**
     * Get the current skin color
     *
     * @return string|null
     */
    public function getSkin()
    {
        return $this->config->get(static::PLUGIN_NAME . 'skin');
    }

    /**
     * Show the mini sidebar when the sidebar collapsed or not
     *
     * @return bool
     */
    public function useMiniSidebar()
    {
        return (bool)$this->config->get(static::PLUGIN_NAME . 'mini_sidebar');
    }

    public function getControlSidebarTheme() {
        return $this->config->get(static::PLUGIN_NAME . 'control_sidebar_theme');
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
        return json_encode($this->config->get(static::PLUGIN_NAME . 'lte_js', []));
    }

}
