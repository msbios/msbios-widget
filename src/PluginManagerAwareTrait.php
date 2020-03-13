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
    /** @var WidgetPluginManagerInterface */
    protected $widgetPluginManager;

    /**
     * @return WidgetPluginManagerInterface
     */
    public function getWidgetPluginManager(): WidgetPluginManagerInterface
    {
        return $this->widgetPluginManager;
    }

    /**
     * @param WidgetPluginManagerInterface $pluginManager
     * @return $this
     */
    public function setWidgetPluginManager(WidgetPluginManagerInterface $pluginManager)
    {
        $this->widgetPluginManager = $pluginManager;
        return $this;
    }
}
