<?php

namespace Deelmate\Themebee\Tests;

use Deelmate\Themebee\Providers\ThemebeeServiceProvider;

/**
 * This is the abstract test case class.
 */
abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ThemebeeServiceProvider::class;
    }
}
