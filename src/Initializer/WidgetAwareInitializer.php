<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Widget\RendererWidgetAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class WidgetAwareInitializer
 * @package MSBios\Widget\Initializer
 */
class WidgetAwareInitializer implements InitializerInterface
{
    /**
     * @param ContainerInterface $container
     * @param object $instance
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof RendererWidgetAwareInterface) {
            $instance->setRenderer(
                $container->get('WidgetPhpRenderer')
            );
        }
    }
}
