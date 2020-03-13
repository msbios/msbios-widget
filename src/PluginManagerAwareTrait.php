<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

/**
 * Trait PluginManagerAwareTrait
 *
 * @package MSBios\Widget
 */
trait PluginManagerAwareTrait
{
    /** @var PluginManagerInterface */
    protected $widgetPluginManager;

    /**
     * @return PluginManagerInterface
     */
    public function getWidgetPluginManager()
    {
        return $this->widgetPluginManager;
    }

    /**
     * @param PluginManagerInterface $pluginManager
     * @return $this
     */
    public function setWidgetPluginManager(PluginManagerInterface $pluginManager)
    {
        $this->widgetPluginManager = $pluginManager;
        return $this;
    }
}
