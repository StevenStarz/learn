<?php

namespace Stevens\Core;

class Core
{
    protected static $counter = 0;

    public static function getCounter()
    {
        return static::$counter;
    }
}