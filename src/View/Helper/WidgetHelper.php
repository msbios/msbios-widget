<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use MSBios\Widget\WidgetInvokeTrait;
use MSBios\Widget\PluginManagerAwareInterface;
use MSBios\Widget\PluginManagerAwareTrait;
use MSBios\Widget\WidgetPluginManagerInterface;

/**
 * Class WidgetHelper
 *
 * @package MSBios\Widget\View\Helper
 */
class WidgetHelper extends AbstractHelper implements PluginManagerAwareInterface
{
    use PluginManagerAwareTrait;

    /**
     * WidgetHelper constructor.
     * @param WidgetPluginManagerInterface $widgetManager
     */
    public function __construct(WidgetPluginManagerInterface $widgetManager)
    {
        $this->setWidgetPluginManager($widgetManager);
    }

    use WidgetInvokeTrait;
}
