<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/22
 * Time: 16:25
 */
$str = 'liyou';

$function = function () use ($str){
    return strtoupper($str);
};
echo $function('doojaa');

$message = 'hello';

$example = function ($message) {
    var_dump($message);
};

$example('asdf');

$example = function () use ($message) {
    var_dump($message);
};
$example('world');

//---------------------

function callback($arg1, $arg2){
    echo __FUNCTION__, ": got $arg1 and $arg2 \n";
}

class callback{
    function callback2($arg1, $arg2){
        echo __CLASS__, ':', __METHOD__, ": got $arg1 and $arg2";
    }
}

call_user_func_array("callback", array('one', 'two'));

$callback = new callback();

call_user_func_array(array($callback, 'callback2'), array('arg1', 'arg2'));


function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}

class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}

call_user_func_array("foobar", array("one", "two"));

$foo = new foo;

call_user_func_array(array($foo, "bar"), array("three", "four"));

function callfun($arg1, $arg2){
    echo __FUNCTION__, ": got $arg1 and $arg2\n";
}
call_user_func('callfun', 'one', 'two');    //string


class mysql
{
    private $_instance = null;
    private $db = null;
    public $config = array();

    private function __construct($config)
    {
        $this->config = $config;
    }

    public static function getInstance($config){
        if(null == self::$_instance){
            self::$_instance = new self($config);
        }
        return self::$_instance;
    }

    public static function __callStatic($name, $arguments)
    {

    }
}







