<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\View\Renderer\RendererInterface;
use MSBios\View\Renderer\PhpRenderer;

/**
 * Class PhpRendererFactory
 *
 * @package MSBios\Widget\Factory
 */
class PhpRendererFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return RendererInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): RendererInterface
    {
        /** @var RendererInterface $renderer */
        return (new PhpRenderer)
            ->setHelperPluginManager($container->get('ViewHelperManager'))
            ->setResolver($container->get('WidgetViewResolver'));
    }
}
