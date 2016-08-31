<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 18:23
 * @ 控制反转 依赖转入 容器   依赖注入容器(dependency injection container)
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
    public function doSomething()
    {
        $this->bim = new Bim();
        $this->bim->doSomething();
        echo __METHOD__ . PHP_EOL;
    }
}

class Foo
{
    private $bar;
    public function doSomething()
    {
        $this->bar = new Bar();
        $this->bar->doSomething();
        echo __METHOD__ . PHP_EOL;
    }
}

$foo = new Foo();
$foo->doSomething();
