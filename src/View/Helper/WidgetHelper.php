<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\View\Helper;

use MSBios\Widget\Exception\InvalidArgumentException;
use MSBios\Widget\Exception\WidgetNotFoundException;
use MSBios\Widget\PhpRendererInterface;
use MSBios\Widget\WidgetInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Class WidgetHelper
 * @package MSBios\Widget\View\Helper
 */
class WidgetHelper extends AbstractHelper
{
    /** @var ServiceLocatorInterface */
    protected $widgetManager;

    /**
     * WidgetHelper constructor.
     * @param ServiceLocatorInterface $widgetManager
     */
    public function __construct(ServiceLocatorInterface $widgetManager)
    {
        $this->widgetManager = $widgetManager;
    }

    /**
     * @param $identifier
     * @param null $options
     * @return mixed
     * @throws WidgetNotFoundException
     */
    public function __invoke($identifier, $options = null)
    {
        if ($this->widgetManager->has($identifier)) {

            /** @var WidgetInterface $widget */
            $widget = $this->widgetManager->get($identifier);

            if (! $widget instanceof WidgetInterface) {
                throw new InvalidArgumentException(
                    'This registered service is not a widget, '
                    . 'to define a widget, implement the interface' . WidgetInterface::class
                );
            }

            return $widget->output($options);
        }

        throw new WidgetNotFoundException(
            "Unable to resolve widget '{$identifier}' to a factory; "
            . "are you certain you provided it during configuration?"
        );
    }
}
