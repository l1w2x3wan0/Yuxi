<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/10
 * Time: 9:50
 */
$redis = new Redis();

$redis->connect('127.0.0.1', 6379) OR die("redis can't connection :" . $redis->getLastError());
$redis->auth('redisPass');
echo 'Redis is running:' . $redis->ping() . "\n";

$redis->set('root', 'admin', 300);
$redis->get('root');
$redis->delete('root');

$redis->set('test', 1000);
$redis->setnx('test', 100);
echo $redis->delete('test', 'root') . PHP_EOL;
$redis->setnx('test', 1000);
echo $redis->get('test') . PHP_EOL;

$re = $redis->exists('test');

$redis->set('test', 1);
echo $redis->incr('test') . PHP_EOL;
echo $redis->incr('test') . PHP_EOL;

$redis->set('test1', 'hello');
$redis->set('test2', 'world');
print_r($redis->getMultiple(['test1', 'test2']));

$redis->lPush('list', 1111);
$redis->lPush('list', 2222);
$redis->rPush('list', 3333);
$redis->rPush('list', 4444);

echo $redis->rPop('list') . PHP_EOL;
echo $redis->lPop('list') . PHP_EOL;

echo $redis->lLen('list') . PHP_EOL;

$redis->delete('list');
$redis->lPush('list', 111);
$redis->lPush('list', 222);
echo $redis->lGet('list', 1) . PHP_EOL;
$redis->lSet('list', 1, 5555);
echo $redis->lGet('list', 1) . PHP_EOL;

$redis->delete('list');
$redis->lPush('list', 1111, 1111, 2222, 3333, 44444, 5555, 6666, 66);
print_r($redis->lGetRange('list', 2, 3));
print_r($redis->lGetRange('list', 2, -1));
$redis->lRemove('list', 1111, 1);
//var_dump($redis->sort('list', array('sort'=>'asc')));
print_r($redis->lGetRange('list', 0, -1));

$redis->delete('set');
ECHO $redis->sAdd('set', 1,2,3,4,5,6) . PHP_EOL;
print_r($redis->sort('set', ['sort'=>'desc']));

echo $redis->sRem('set', 1, 2, 3);

echo $redis->sRemove('set', '1');

