<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 19:00
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
    private $s = array();

    public function __set($k, $c)
    {
        $this->s[$k] = $c;
    }

    public function __get($k)
    {
        //return $this->s[$k]($this);
        return $this->bing($k);
    }

    public function bing($class)
    {
        if ($class instanceof Closure) {
            return $class($this);
        }

    }
}


