<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\View\Resolver\TemplateMapResolver;
use MSBios\Widget\Module;

/**
 * Class TemplateMapResolverFactory
 *
 * @package MSBios\Widget\Factory
 */
class TemplateMapResolverFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return TemplateMapResolver
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): TemplateMapResolver
    {
        return new TemplateMapResolver($container->get(Module::class)['template_map']);
    }
}
