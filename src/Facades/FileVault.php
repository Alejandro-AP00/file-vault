<?php

namespace AlejandroAPorras\FileVault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlejandroAPorras\FileVault\FileVault
 */
class FileVault extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlejandroAPorras\FileVault\FileVault::class;
    }
}
