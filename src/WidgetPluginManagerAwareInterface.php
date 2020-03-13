<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

/**
 * Interface WidgetPluginManagerAwareInterface
 * @package MSBios\Widget
 */
interface WidgetPluginManagerAwareInterface
{
    /**
     * @return PluginManagerInterface
     */
    public function getWidgetPluginManager();

    /**
     * @param PluginManagerInterface $widgetManager
     * @return mixed
     */
    public function setWidgetPluginManager(PluginManagerInterface $widgetManager);
}
