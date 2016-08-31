<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 17:07
 * @ Ioc 控制反转 Inversion of Controller
 */
//高层
class Business
{
    private $write;
    public function __construct()
    {
        $this->write = new FloppyWrite();
    }

    public function save()
    {
        $this->write->saveToFloppy();
    }
}

//底层 软盘存贮
class FloppyWrite
{
    public function saveToFloppy()
    {
        echo __CLASS__ . ' ： ' . __METHOD__ . PHP_EOL;
    }
}

//底层 usb存贮
class UsbWrite
{
    public function saveToUsb()
    {
        echo __CLASS__ . ' ： ' . __METHOD__ . PHP_EOL;
    }
}

$business = new Business();
$business->save('ok');


/**
 * //糟糕的设计，如果写到文件或其他地方就需要修改上层代码或底层代码 也可以做如下调整
Setter injection 使用setter方法
Constructor injection 使用构造函数
Property Injection 直接设置属性
 */





