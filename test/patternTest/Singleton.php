<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/23
 * Time: 19:21
 */

class Single
{
    protected static  $_instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null === static::$_instance) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }

    public static function getSingle()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

class db extends Single
{

}

$db = db::getInstance();
$db2 = db::getInstance();
$db3 = Single::getInstance();
$db4 = Single::getInstance();
print($db === $db2);
print($db3 === $db2);
exit;
















class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

class SingletonChild extends Singleton
{
}

$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Singleton::getInstance());      // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)