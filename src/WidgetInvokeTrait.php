<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use MSBios\Widget\Exception\InvalidArgumentException;
use MSBios\Widget\Exception\WidgetNotFoundException;

/**
 * Trait WidgetInvokeTrait
 * @package MSBios\Widget
 */
trait WidgetInvokeTrait
{
    /**
     * @param $identifier
     * @param null $options
     * @param callable|null $callback
     * @return mixed
     */
    public function __invoke($identifier, $options = null, callable $callback = null)
    {
        if (! $this->getWidgetPluginManager()->has($identifier)) {
            throw new WidgetNotFoundException(
                "Unable to resolve widget '{$identifier}' to a factory; "
                . "are you certain you provided it during configuration?"
            );
        }

        /** @var WidgetInterface $widget */
        $widget = $this
            ->getWidgetPluginManager()
            ->get($identifier);

        if (! $widget instanceof WidgetInterface) {
            throw new InvalidArgumentException(
                'This registered service is not a widget, '
                . 'to define a widget, implement the interface' . WidgetInterface::class
            );
        }

        return $widget
            ->output($options, $callback);
    }
}
