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
     * @param WidgetPluginManagerAwareInterface $widgetManager
     * @return $this
     */
    public function setWidgetPluginManager(WidgetPluginManagerAwareInterface $widgetManager);
}
