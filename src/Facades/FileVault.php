<?php

namespace AlejandroAPorras\FileVault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed generateKey()
 * @method static mixed disk(string $disk)
 * @method static mixed key(string $key)
 * @method static mixed encrypt(string $sourceFile, string $destFile = null, $deleteSource = true)
 * @method static mixed encryptCopy(string $sourceFile, string $destFile = null)
 * @method static mixed decrypt(string $sourceFile, string $destFile = null, $deleteSource = true)
 * @method static mixed decryptCopy(string $sourceFile, string $destFile = null)
 * @method static mixed streamDecrypt(string $sourceFile)
 *
 * @see \AlejandroAPorras\FileVault\FileVault
 */
class FileVault extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlejandroAPorras\FileVault\FileVault::class;
    }
}
