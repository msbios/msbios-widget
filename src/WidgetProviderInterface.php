<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

/**
 * Interface WidgetProviderInterface
 * @package MSBios\Widget
 */
interface WidgetProviderInterface
{
    /**
     * @return mixed
     */
    public function getWidgetConfig();
}