<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 17:22
 * @ Ioc 反转控制示例
 */

interface IDeviceWrite
{
    public function saveToDevice();
}

class FloppyWrite implements IDeviceWrite
{
    public function saveToDevice()
    {
        echo __CLASS__ . ':' . __METHOD__ . PHP_EOL;
    }
}

class UsbWrite implements IDeviceWrite
{
    public function saveToDevice()
    {
        echo __CLASS__ . ':' . __METHOD__ . PHP_EOL;
    }
}

class Business
{
    private $write;

    public function setWrite(IDeviceWrite $write)
    {
        $this->write = $write;
    }

    public function save()
    {
        $this->write->saveToDevice();
    }
}


$business = new Business();
$business->setWrite(new FloppyWrite());
$business->save();

$business = new Business();
$business->setWrite(new UsbWrite());
$business->save();


