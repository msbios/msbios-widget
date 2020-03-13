<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\View\Resolver\AggregateResolver;
use Laminas\View\Resolver\RelativeFallbackResolver;
use Laminas\View\Resolver\TemplateMapResolver;
use Laminas\View\Resolver\TemplatePathStack;

/**
 * Class AggregateResolverFactory
 * @package MSBios\Widget\Factory
 */
class AggregateResolverFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return AggregateResolver
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): AggregateResolver
    {
        /** @var TemplateMapResolver $map */
        $map = $container->get('WidgetTemplateMapResolver');

        /** @var TemplatePathStack $stack */
        $stack = $container->get('WidgetTemplatePathStack');

        /** @var AggregateResolver $aggregateResolver */
        return (new AggregateResolver)
            ->attach($map)
            ->attach($stack)
            ->attach(new RelativeFallbackResolver($map))
            ->attach(new RelativeFallbackResolver($stack));
    }
}