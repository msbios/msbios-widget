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
 * Class WidgetRendererFactory
 * @package MSBios\Widget\Factory
 */
class PhpRendererFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PhpRenderer|RendererInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var RendererInterface $renderer */
         $renderer = new PhpRenderer;
         $renderer->setHelperPluginManager($container->get('ViewHelperManager'));
         $renderer->setResolver($container->get('WidgetResolver'));
         return $renderer;
    }
}
