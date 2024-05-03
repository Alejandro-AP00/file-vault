<?php

namespace AlejandroAPorras\FileVault\Commands;

use Illuminate\Console\Command;

class FileVaultCommand extends Command
{
    public $signature = 'file-vault';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
