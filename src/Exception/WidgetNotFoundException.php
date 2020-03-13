<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Exception;

/**
 * Class WidgetNotFoundException
 *
 * @package MSBios\Widget\Exception
 */
class WidgetNotFoundException extends InvalidArgumentException
{
    /**
     * @param $identifier
     *
     * @return \Throwable
     */
    public static function unableToResolveWidget($identifier): \Throwable
    {
        return self::create(sprintf('Unable to resolve widget "%s" to a factory; "
            . "are you certain you provided it during configuration?', $identifier));
    }
}
