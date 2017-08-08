<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\View\Helper;

use MSBios\Widget\Exception\WidgetNotFoundException;
use MSBios\Widget\PhpRendererInterface;
use MSBios\Widget\RendererAwareInterface;
use MSBios\Widget\WidgetInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Class WidgetHelper
 * @package MSBios\Widget\View\Helper
 */
class WidgetHelper extends AbstractHelper
{
    /** @var  ServiceLocatorInterface */
    protected $serviseManager;

    /**
     * WidgetHelper constructor.
     * @param ServiceLocatorInterface $serviseManager
     */
    public function __construct(ServiceLocatorInterface $serviseManager)
    {
        $this->serviseManager = $serviseManager;
    }

    /**
     * @param $identifier
     * @param null $options
     * @return mixed
     * @throws WidgetNotFoundException
     */
    public function __invoke($identifier, $options = null)
    {
        if ($this->serviseManager->has($identifier)) {

            /** @var WidgetInterface $widget */
            $widget = $this->serviseManager->get($identifier);

            if ($widget instanceof RendererAwareInterface) {
                $widget->setRenderer(
                    $this->serviseManager->get(PhpRendererInterface::class)
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
