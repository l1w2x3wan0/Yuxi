<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  5:45
 * Use:
 */

namespace pattern;


class Magic
{
    public function __construct()
    {
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __invoke($x)
    {
        // TODO: Implement __invoke() method.
        echo 'call : ' . __METHOD__ . "\n";
        print_r($x);
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __toString()
    {
        // TODO: Implement __toString() method..
        echo 'call : ' . __METHOD__ . "\n";
        return '';
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        echo 'call : ' . __METHOD__ . "\n";
    }

}