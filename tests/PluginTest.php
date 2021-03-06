<?php

namespace Boilerplate\Tests;

/**
 * Unit tests to check so Plugin Boilerplate is loaded correctly.
 *
 * @since 1.0.0
 */

class PluginTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The action `plugins_loaded` should have the `boilerplate` hook
     * and should have a default priority of 0.
     *
     * @since 1.0.0
     */

    public function testPluginsLoadedAction()
    {
        $this->assertEquals(0, has_action('plugins_loaded', 'boilerplate'));
    }
}
