<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\View\Resolver\TemplatePathStack;
use MSBios\Widget\Module;

/**
 * Class TemplatePathStackFactory
 *
 * @package MSBios\Widget\Factory
 */
class TemplatePathStackFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object|TemplatePathStack
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $options */
        $options = $container->get(Module::class);

        return new TemplatePathStack([
            'script_paths' => $options['template_path_stack'],
            'default_suffix' => $options['default_template_suffix']
        ]);
    }
}
