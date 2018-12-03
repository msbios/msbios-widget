<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\View\Renderer\PhpRenderer;
use Zend\View\Renderer\RendererInterface;

/**
 * Class PhpRendererFactory
 * @package MSBios\Widget\Factory
 */
class PhpRendererFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object|RendererInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var RendererInterface $renderer */
         $renderer = new PhpRenderer;
         $renderer->setHelperPluginManager($container->get('ViewHelperManager'));
         $renderer->setResolver($container->get('WidgetViewResolver'));
         return $renderer;
    }
}
