<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Controller\Plugin;

use MSBios\Widget\WidgetInvokeTrait;
use MSBios\Widget\WidgetPluginManagerAwareInterface;
use MSBios\Widget\PluginManagerAwareTrait;
use MSBios\Widget\PluginManagerInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class WidgetPlugin
 * @package MSBios\Widget\Controller\Plugin
 */
class WidgetPlugin extends AbstractPlugin implements WidgetPluginManagerAwareInterface
{
    use PluginManagerAwareTrait;

    /**
     * WidgetPlugin constructor.
     * @param PluginManagerInterface $widgetPluginManager
     */
    public function __construct(PluginManagerInterface $widgetPluginManager)
    {
        $this->setWidgetPluginManager($widgetPluginManager);
    }

    use WidgetInvokeTrait;
}
