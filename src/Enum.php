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