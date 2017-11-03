<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Feature;

/**
 * Interface WidgetProviderInterface
 * @package MSBios\Widget\Feature
 */
interface WidgetProviderInterface
{
    /**
     * @return mixed
     */
    public function getWidgetConfig();
}
