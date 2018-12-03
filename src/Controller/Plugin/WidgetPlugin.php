<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Controller\Plugin;

use MSBios\Widget\WidgetInvokeTrait;
use MSBios\Widget\WidgetPluginManagerAwareInterface;
use MSBios\Widget\WidgetPluginManagerAwareTrait;
use MSBios\Widget\WidgetPluginManagerInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class WidgetPlugin
 * @package MSBios\Widget\Controller\Plugin
 */
class WidgetPlugin extends AbstractPlugin implements WidgetPluginManagerAwareInterface
{
    use WidgetPluginManagerAwareTrait;

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
