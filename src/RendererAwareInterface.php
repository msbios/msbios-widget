<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Laminas\View\Renderer\RendererInterface;

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

    /**
     * @return RendererInterface
     */
    public function getRenderer(): RendererInterface;

    /**
     * @param $nameOrModel
     * @param null $values
     * @return mixed
     */
    public function render($nameOrModel, $values = null);
}
