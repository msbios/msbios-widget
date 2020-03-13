<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Widget;

use MSBios\Widget\PluginManager;
use PHPUnit\Framework\TestCase;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Test\Util\ModuleLoader;

/**
 * Class WidgetManagerTest
 * @package MSBiosTest\Widget
 */
class WidgetManagerTest extends TestCase
{
    /**
     * @return $this
     */
    public function testCanCallWidgetManager()
    {
        /** @var ModuleLoader $moduleLoader */
        $moduleLoader = new ModuleLoader(include __DIR__ . '/../config/application.config.php');
        /** @var ServiceLocatorInterface $serviceManager */
        $serviceManager = $moduleLoader->getServiceManager();
        /** @var PluginManager $widgetManager */
        $widgetManager = $serviceManager->get('WidgetManager');
        $this->assertInstanceOf(PluginManager::class, $widgetManager);

        return $this;
    }
}
