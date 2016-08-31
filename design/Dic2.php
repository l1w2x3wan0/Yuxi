<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 18:32
 * @ 控制反转 容器
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


$foo = new Foo(new Bar(new Bim()));
$foo->doSomething();
