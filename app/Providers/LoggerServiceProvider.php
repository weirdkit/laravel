<?php

namespace App\Providers;

use App\Constants\Loggers;
use Illuminate\Log\Writer;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;

class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $loggers = Loggers::getLoggers();

        foreach ($loggers as $logger) {
            $name = substr($logger, strpos($logger, ':') + 1);

            $this->app->singleton($logger, function () use ($name) {
                $path = storage_path("logs/{$name}.log");

                $logger = new Writer(new Logger($name));
                $logger->useDailyFiles($path);

                return $logger;
            });
        }
    }
}

