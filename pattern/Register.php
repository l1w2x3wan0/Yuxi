<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  6:46
 * Use:
 */

namespace pattern;


class Register
{
    protected static $objects;

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($name)
    {
        return self::$objects[$name];
    }

    public function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}