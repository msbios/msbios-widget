<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

/**
 * Trait WidgetPluginManagerAwareTrait
 * @package MSBios\Widget
 */
trait WidgetPluginManagerAwareTrait
{
    /** @var WidgetPluginManagerInterface */
    protected $widgetPluginManager;

    /**
     * @return WidgetPluginManagerInterface
     */
    public function getWidgetPluginManager()
    {
        return $this->widgetPluginManager;
    }

    /**
     * @param WidgetPluginManagerAwareInterface $widgetPluginManager
     * @return $this
     */
    public function setWidgetPluginManager(WidgetPluginManagerAwareInterface $widgetPluginManager)
    {
        $this->widgetPluginManager = $widgetPluginManager;
        return $this;
    }
}