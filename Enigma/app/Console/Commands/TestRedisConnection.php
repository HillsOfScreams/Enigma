<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class TestRedisConnection extends Command
{
    protected $signature = 'test:testredisconnection';

    protected $description = 'Test command for Redis database connection';

    public function handle()
    {
        try {
            Redis::set('test-key', 'test-value');
            $value = Redis::get('test-key');
            $this->info("Redis connection successful. Value retrieved from Redis: $value");
        } catch (\Exception $e) {
            $this->error("Failed to connect to Redis: " . $e->getMessage());
        }
    }
}
