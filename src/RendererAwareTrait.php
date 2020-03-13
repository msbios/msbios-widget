<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Laminas\View\Renderer\RendererInterface;

/**
 * Trait RendererAwareTrait
 * @package MSBios\Widget
 */
trait RendererAwareTrait
{
    /** @var  RendererInterface */
    protected $renderer;

    /**
     * @param RendererInterface $renderer
     * @return $this
     */
    public function setRenderer(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
        return $this;
    }

    /**
     * @return RendererInterface
     */
    public function getRenderer(): RendererInterface
    {
        return $this->renderer;
    }

    /**
     * @param $nameOrModel
     * @param null $values
     * @return string
     */
    public function render($nameOrModel, $values = null)
    {
        return $this->renderer->render($nameOrModel, $values);
    }
}
