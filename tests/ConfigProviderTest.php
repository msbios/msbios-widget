<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Widget;

use MSBios\Widget\ConfigProvider;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigProviderTest
 * @package MSBiosTest\Widget
 */
class ConfigProviderTest extends TestCase
{
    /**
     * @return $this
     */
    public function testGetInvokeConfig()
    {
        $this->assertInternalType(
            'array',
            (new ConfigProvider)()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testGetDependencyConfig()
    {
        $this->assertInternalType(
            'array',
            (new ConfigProvider)->getDependencyConfig()
        );
        return $this;
    }
}
