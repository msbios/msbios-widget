<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

/**
 * Interface PluginManagerAwareInterface
 *
 * @package MSBios\Widget
 */
interface PluginManagerAwareInterface
{
    /**
     * @return WidgetPluginManagerInterface
     */
    public function getWidgetPluginManager(): WidgetPluginManagerInterface;

    /**
     * @param WidgetPluginManagerInterface $pluginManager
     * @return mixed
     */
    public function setWidgetPluginManager(WidgetPluginManagerInterface $pluginManager);
}
