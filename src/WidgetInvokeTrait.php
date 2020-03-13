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
 *
 * @package MSBios\Widget
 */
trait WidgetInvokeTrait
{
    /**
     * @inheritDoc
     *
     * @param $identifier
     * @param null $options
     * @param callable|null $callback
     * @return mixed
     * @throws \Throwable
     */
    public function __invoke($identifier, $options = null, callable $callback = null)
    {
        if (! $this->getWidgetPluginManager()->has($identifier)) {
            throw WidgetNotFoundException::unableToResolveWidget($identifier);
        }

        /** @var WidgetInterface $widget */
        $widget = $this
            ->getWidgetPluginManager()
            ->get($identifier);

        if (! $widget instanceof WidgetInterface) {
            throw InvalidArgumentException::registeredServiceIsNotAWidget();
        }

        return $widget->output($options, $callback);
    }
}
