<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\View\Helper;

use MSBios\Widget\WidgetInvokeTrait;
use MSBios\Widget\WidgetPluginManagerAwareInterface;
use MSBios\Widget\WidgetPluginManagerAwareTrait;
use MSBios\Widget\WidgetPluginManagerInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Class WidgetHelper
 * @package MSBios\Widget\View\Helper
 */
class WidgetHelper extends AbstractHelper implements WidgetPluginManagerAwareInterface
{
    use WidgetPluginManagerAwareTrait;

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
