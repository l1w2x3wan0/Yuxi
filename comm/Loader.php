<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  5:20
 * Use:
 */

namespace comm;


class Loader
{
    public static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}