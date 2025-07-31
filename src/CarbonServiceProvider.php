<?php

namespace FilamentIcons\Carbon;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class CarbonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('carbon', [
            'path' => __DIR__.'/../resources/icons',
            'prefix' => 'carbon',
        ]);
    }
}
