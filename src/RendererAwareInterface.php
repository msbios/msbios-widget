<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Zend\View\Renderer\RendererInterface;

/**
 * Interface RendererAwareInterface
 * @package MSBios\Widget
 */
interface RendererAwareInterface
{
    /**
     * @param RendererInterface $renderer
     * @return mixed
     */
    public function setRenderer(RendererInterface $renderer);
}
