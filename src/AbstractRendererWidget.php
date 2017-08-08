<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use Zend\View\Renderer\RendererInterface;

/**
 * Class AbstractRendererWidget
 * @package MSBios\Widget
 */
abstract class AbstractRendererWidget implements WidgetInterface, RendererAwareInterface
{
    /** @var  RendererInterface */
    private $renderer;

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
     * @param $nameOrModel
     * @param null $values
     * @return string
     */
    public function render($nameOrModel, $values = null)
    {
        return $this->renderer->render($nameOrModel, $values);
    }
}
