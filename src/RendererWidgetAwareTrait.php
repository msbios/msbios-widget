<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

use Zend\View\Renderer\RendererInterface;

/**
 * Trait RendererWidgetAwareTrait
 * @package MSBios\Widget
 */
trait RendererWidgetAwareTrait
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
    public function getRenderer()
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
