<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 17:49
 */
//底层 软盘存贮
class FloppyWrite
{
    public function saveToDevic()
    {
        echo __CLASS__ . ':' . __METHOD__ . PHP_EOL;
    }
}

//底层 usb存贮
class UsbWrite
{
    public function saveToDevic()
    {
        echo __CLASS__ . ':' . __METHOD__ . PHP_EOL;
    }
}

// 高层
class Business
{
    private $write;

    public function __construct($write)
    {
        $this->write = $write;
    }

    public function save()
    {
        $this->write->saveToDevic();
    }
}

$business = new Business(new FloppyWrite());
$business->save();

$business = new Business(new UsbWrite());
$business->save();