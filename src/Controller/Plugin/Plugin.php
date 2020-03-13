<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Controller\Plugin;

use MSBios\Widget\WidgetInvokeTrait;
use MSBios\Widget\PluginManagerAwareInterface;
use MSBios\Widget\PluginManagerAwareTrait;
use MSBios\Widget\WidgetPluginManagerInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class WidgetPlugin
 * @package MSBios\Widget\Controller\Plugin
 */
class Plugin extends AbstractPlugin implements PluginManagerAwareInterface
{
    use PluginManagerAwareTrait;

    /**
     * WidgetPlugin constructor.
     * @param WidgetPluginManagerInterface $widgetPluginManager
     */
    public function __construct(WidgetPluginManagerInterface $widgetPluginManager)
    {
        $this->setWidgetPluginManager($widgetPluginManager);
    }

    use WidgetInvokeTrait;
}
