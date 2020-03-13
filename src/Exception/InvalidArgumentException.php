<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget\Exception;

use MSBios\Widget\WidgetInterface;

/**
 * Class InvalidArgumentException
 *
 * @package MSBios\Widget\Exception
 */
class InvalidArgumentException extends \MSBios\Exception\InvalidArgumentException
{
    /**
     * @return \Throwable
     */
    public static function registeredServiceIsNotAWidget(): \Throwable
    {
        return self::create('This registered service is not a widget, '
            . 'to define a widget, implement the interface '
            . WidgetInterface::class
        );
    }
}
