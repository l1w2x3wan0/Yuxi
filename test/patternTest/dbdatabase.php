<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/22
 * Time: 14:33
 */

namespace test\patternTest;


class dbdatabase
{
    private static $_instance = null;
    protected $db = null
    public $config = array();
    private function __construct($config)
    {
        $this->config = $config;
    }

    public static function getInstance(){
        if (self::$_instance == null) {
            self::$_instance = new self()
        }
        return self::$_instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

}