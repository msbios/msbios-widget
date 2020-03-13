<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use MSBios\Widget\WidgetInvokeTrait;
use MSBios\Widget\WidgetPluginManagerAwareInterface;
use MSBios\Widget\PluginManagerAwareTrait;
use MSBios\Widget\PluginManagerInterface;

/**
 * Class WidgetHelper
 * @package MSBios\Widget\View\Helper
 */
class WidgetHelper extends AbstractHelper implements WidgetPluginManagerAwareInterface
{
    use PluginManagerAwareTrait;

    /**
     * WidgetHelper constructor.
     * @param PluginManagerInterface $widgetManager
     */
    public function __construct(PluginManagerInterface $widgetManager)
    {
        $this->setWidgetPluginManager($widgetManager);
    }

    use WidgetInvokeTrait;
}
