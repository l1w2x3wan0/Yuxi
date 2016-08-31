<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 18:40
 */
class Bim
{
    public function doSomething()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class Bar
{
    private $bim;

    public function __construct(Bim $bim)
    {
        $this->bim = $bim;
    }

    public function doSomething()
    {
        $this->bim->doSomething();
        echo __METHOD__ . PHP_EOL;
    }
}

class Foo
{
    private $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function doSomething()
    {
        $this->bar->doSomething();
        echo __METHOD__ .PHP_EOL;
    }
}

class Container
{
    private $c = array();

    public function __set($name, $value)
    {
        $this->c[$name] = $value;
    }

    public function __get($name)
    {
        return $this->c[$name]($this);
    }
}

$c = new Container();
$c->bim = function(){
    return new Bim();
};

$c->bar = function($c){
    return new Bar($c->bim);
};

$c->foo = function($c){
    return new Foo($c->bar);
};

$foo = $c->foo;
$foo->doSomething();

