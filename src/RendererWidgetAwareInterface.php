<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Zend\View\Renderer\RendererInterface;

/**
 * Interface RendererWidgetAwareInterface
 * @package MSBios\Widget
 */
interface RendererWidgetAwareInterface
{
    /**
     * @param RendererInterface $renderer
     * @return mixed
     */
    public function setRenderer(RendererInterface $renderer);

    /**
     * @return mixed
     */
    public function getRenderer();

    /**
     * @param $nameOrModel
     * @param null $values
     * @return mixed
     */
    public function render($nameOrModel, $values = null);
}
