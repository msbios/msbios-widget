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
 * Class ResolverFactory
 * @package MSBios\Widget\Factory
 */
class ResolverFactory implements FactoryInterface
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

        /** @var AggregateResolver $resolver */
        $resolver = new AggregateResolver;
        $resolver->attach($map)
            ->attach($stack)
            ->attach(new RelativeFallbackResolver($map))
            ->attach(new RelativeFallbackResolver($stack));

        return $resolver;
    }
}
