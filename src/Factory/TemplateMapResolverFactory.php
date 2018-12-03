<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Widget\Module;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\View\Resolver\TemplateMapResolver;

/**
 * Class TemplateMapResolverFactory
 * @package MSBios\Widget\Factory
 */
class TemplateMapResolverFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object|TemplateMapResolver
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new TemplateMapResolver(
            $container->get(Module::class)
                ->get('template_map')
        );
    }
}
