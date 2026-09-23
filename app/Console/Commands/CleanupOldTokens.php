<?php

namespace App\Console\Commands;

use App\Models\DemoToken;
use Illuminate\Console\Command;

class CleanupOldTokens extends Command
{
    protected $signature = 'tokens:cleanup';
    protected $description = 'Hapus token demo yang usianya lebih dari 30 hari';

    public function handle(): void
    {
        $count = DemoToken::where('created_at', '<', now()->subDays(30))->delete();
        $this->info("{$count} token lama berhasil dihapus.");
    }
}