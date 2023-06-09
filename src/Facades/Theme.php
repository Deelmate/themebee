<?php

namespace Deelmate\Themebee\Facades;

use Illuminate\Support\Facades\Facade;

class Theme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Deelmate\Themebee\Contracts\ThemeContract::class;
    }
}
