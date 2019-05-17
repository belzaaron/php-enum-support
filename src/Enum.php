<?php

namespace BelzAaron\EnumSupport;

abstract class Enum
{
    /**
     * This will return all constants defined.
     *
     * @return array
     */
    public static function all(): array
    {
        return ((new \ReflectionClass(static::class))->getConstants()) ?? [];
    }

    /**
     * This will return the keys for all constants defined.
     *
     * @return array
     */
    public static function keys(): array
    {
        return array_keys(self::all());
    }

    /**
     * This will return the values for all constants defined.
     *
     * @return array
     */
    public static function values(): array
    {
        return array_values(self::all());
    }

    /**
     * This will return a valid VALUE from the constants defined.
     *
     * @return mixed
     */
    public static function random()
    {
        return array_random(
            (new \ReflectionClass(static::class))->getConstants()
        );
    }
}