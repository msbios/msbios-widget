<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Initializer\InitializerInterface;

/**
 * Class WidgetAwareInitializer
 * @package MSBios\Widget
 * @todo rename WidgetRendererAwareInitializer
 */
class RendererAwareInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof RendererAwareInterface) {
            $instance->setRenderer(
                $container->get('WidgetPhpRenderer')
            );
        }
    }

    /**
     * @param $an_array
     * @return RendererAwareInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
