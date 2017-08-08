<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Widget\View\Helper\WidgetHelper;
use MSBios\Widget\WidgetManager;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class WidgetHelperFactory
 * @package MSBios\Widget\Factory
 */
class WidgetHelperFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return WidgetHelper
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new WidgetHelper($container);
    }
}
