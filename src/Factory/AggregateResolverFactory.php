<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\View\Resolver\AggregateResolver;
use Zend\View\Resolver\RelativeFallbackResolver;
use Zend\View\Resolver\TemplateMapResolver;
use Zend\View\Resolver\TemplatePathStack;

/**
 * Class AggregateResolverFactory
 * @package MSBios\Widget\Factory
 */
class AggregateResolverFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return AggregateResolver
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var TemplateMapResolver $map */
        $map = $container->get('WidgetTemplateMapResolver');

        /** @var TemplatePathStack $stack */
        $stack = $container->get('WidgetTemplatePathStack');

        /** @var AggregateResolver $aggregateResolver */
        $aggregateResolver = new AggregateResolver;
        $aggregateResolver->attach($map)
            ->attach($stack)
            ->attach(new RelativeFallbackResolver($map))
            ->attach(new RelativeFallbackResolver($stack));

        return $aggregateResolver;
    }
}
