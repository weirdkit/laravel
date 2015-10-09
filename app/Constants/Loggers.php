<?php

namespace App\Constants;

use ReflectionClass;

/**
 * Every constant of this class is supposed to be a logger:
 *
 * <pre>
 *   // Define logger this way
 *   const FB = 'logger:facebook';
 *
 *  // Usage
 *  app(Loggers::FB)->debug('foo', $bar);
 * </pre>
 */
final class Loggers
{
    /**
     * Get class constants
     *
     * @return array
     */
    public static function getLoggers()
    {
        return (new ReflectionClass(static::class))->getConstants();
    }
}

