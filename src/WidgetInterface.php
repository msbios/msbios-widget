<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Zend\View\Renderer\RendererInterface;

/**
 * Interface WidgetInterface
 * @package MSBios\Widget
 */
interface WidgetInterface
{
    /**
     * @param null $data
     * @return mixed
     */
    public function output($data = null);
}
