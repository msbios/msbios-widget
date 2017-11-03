<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\View\Helper;

use MSBios\Widget\Exception\NotFoundException;
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
    protected $serviceManager;

    /**
     * WidgetHelper constructor.
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function __construct(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceManager = $serviceLocator;
    }

    /**
     * @param $identifier
     * @param null $options
     * @return mixed
     * @throws NotFoundException
     */
    public function __invoke($identifier, $options = null)
    {
        if ($this->serviceManager->has($identifier)) {

            /** @var WidgetInterface $widget */
            $widget = $this->serviceManager->get($identifier);

            if ($widget instanceof RendererAwareInterface) {
                $widget->setRenderer(
                    $this->serviceManager->get(PhpRendererInterface::class)
                );
            }

            return $widget->output($options);
        }

        throw new NotFoundException(
            "Unable to resolve widget '{$identifier}' to a factory; "
            . "are you certain you provided it during configuration?"
        );
    }
}
