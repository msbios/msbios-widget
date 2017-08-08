<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Widget;

use MSBios\Widget\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Widget
 */
class ModuleTest extends TestCase
{
    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertInternalType('array', (new Module)->getAutoloaderConfig());
    }
}
