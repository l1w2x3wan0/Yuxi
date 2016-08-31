<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/24
 * Time: 10:15
 */

interface IStrategy
{
    public function operator();
}

class XmlStrategy implements IStrategy
{
    public function operator()
    {
        echo 'Xml' . PHP_EOL;
    }
}

class JsonStrategy implements IStrategy
{
    public function operator()
    {
        echo 'Json' . PHP_EOL;
    }
}

class ArrayStrategy implements IStrategy
{
    public function operator()
    {
        echo 'Array' . PHP_EOL;
    }
}

class Out
{
    protected $strategy;

    public function __construct(IStrategy $Strategy)
    {
        $this->strategy = $Strategy;
    }

    public function outContent()
    {
        $this->strategy->operator();
    }
}

$a = new Out(new XmlStrategy());
$a->outContent();

$b = new Out(new JsonStrategy());
$b->outContent();