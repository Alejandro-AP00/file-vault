<?php

namespace alejandroaporras\FileVault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \alejandroaporras\FileVault\FileVault
 */
class FileVault extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \alejandroaporras\FileVault\FileVault::class;
    }
}
