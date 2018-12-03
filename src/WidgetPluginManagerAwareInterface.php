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
     * @return WidgetPluginManagerInterface
     */
    public function getWidgetPluginManager();

    /**
     * @param WidgetPluginManagerInterface $widgetManager
     * @return mixed
     */
    public function setWidgetPluginManager(WidgetPluginManagerInterface $widgetManager);
}
