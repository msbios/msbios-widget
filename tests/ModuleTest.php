<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Widget;

use MSBios\ModuleInterface;
use MSBios\Widget\Module;
use PHPUnit\Framework\TestCase;
use Zend\ModuleManager\Feature\InitProviderInterface;

/**
 * Class ModuleTest
 * @package MSBiosTest\Widget
 */
class ModuleTest extends TestCase
{
    /**
     * @return $this
     */
    public function testModuleImplementIntercafe()
    {
        $this->assertInstanceOf(
            ModuleInterface::class,
            (new Module)
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testGetModuleConfig()
    {
        $this->assertInternalType(
            'array',
            (new Module)->getConfig()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertInternalType(
            'array',
            (new Module)->getAutoloaderConfig()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function tesModuleMustBeImplementInitProvider()
    {
        $this->assertInstanceOf(InitProviderInterface::class, new Module);
        return $this;
    }
}
