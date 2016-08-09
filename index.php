<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  5:06
 * Use:
 */
header("Content-type:text/html; charset=utf-8");

define('BASEDIR', __DIR__);
include BASEDIR . '/comm/Loader.php';
spl_autoload_register('\\comm\\Loader::autoload');

$dbconfig = ['store'=>'mysqli', 'host'=>'127.0.0.1', 'user'=>'root', 'passwd'=>'123456', 'dbname'=>'test', 'charset'=>'utf8'];




//prototype  clone class


/*//observer
$event = new \pattern\Event();
$event->addObserver(new \pattern\ObserverEmail());
$event->addObserver(new \pattern\ObserverSms());
$event->trigger();
exit;*/

/*//数据库隐射
$db = \pattern\SingleDatabase::getInstance($dbconfig)->db;
echo $sql = "insert into `user` VALUES (1, 'lwx', 15767915200, 1470398913);";
$db->query($sql);
//var_dump($db);
exit;*/

/*
//strategy 策略模式
class Page
{
    protected $strategy;

    public function index()
    {
        $this->strategy->showAd();
        $this->strategy->showCategory();
    }
    public function setStrategy(\pattern\IUserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}
$page = new Page();
$strategy = ($_GET['man'] == 'female') ? new \pattern\StrategyUserFemale() : new \pattern\StrategyUserMale();
$page->setStrategy($strategy);
$page->index();
exit;

$mysql = new \lib\db\Mysql();
$mysql2 = new \lib\db\Mysql();

var_dump($mysql);
var_dump($mysql2);
exit;
*/


/*//Factory 工厂模式
\pattern\Factory::createDatabase();
$db = \pattern\Register::get('db1');
$db1 = \pattern\Register::get('db1');
$db2 = \pattern\Register::get('db1');
var_dump($db);
var_dump($db1);
var_dump($db2);
exit;

$db = \pattern\Factory::createDatabase();
$db1 = \pattern\Factory::createDatabase();
$db2 = \pattern\Factory::createDatabase();
var_dump($db);
var_dump($db1);
var_dump($db2);
exit;*/

//Magic
$magic = new \pattern\Magic(23);
$magic->name = 'lwx';
echo $magic;
unset($magic->name);
isset($magic->name);
print_r($magic);
$magic->getH('asd');
$magic(12, 'lwx');
$a = clone $magic;
exit;

$satack = new SplStack();
$satack->push("data1\n");
$satack->push("data2\n");

echo $satack->pop();
echo $satack->pop();

$queue = new SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");

echo $queue->dequeue();
echo $queue->dequeue();


$head = new SplMinHeap();
$head->insert("data1\n");
$head->insert("data2\n");

echo $head->extract();
echo $head->extract();

$array = new SplFixedArray(5);
$array[0] = 123;
$array[3] = 123423;

var_dump($array);

use app\controller\home\Index;
use comm\TestClass2;

Index::test();

TestClass2::test();