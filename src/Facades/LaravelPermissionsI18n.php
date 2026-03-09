<?php

namespace Mapo89\LaravelPermissionsI18n\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mapo89\LaravelPermissionsI18n\LaravelPermissionsI18n
 */
class LaravelPermissionsI18n extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mapo89\LaravelPermissionsI18n\LaravelPermissionsI18n::class;
    }
}
