<?php
/**
 * User: beyond_dream
 * Date: 2016/8/10 0010  2:17
 * Use:
 */
//连接多台memcache
$mem = new Memcache;
$mem->addServer('localhost',11211);
$mem->addServer('localhost',11212);

//保存数据
$mem->set('key3','this is first value', 0, 60);
$val = $mem->get('key3');
echo "Get key3 value:".$val."<br/>";

//替换数据
$mem->replace('key3','this is replace value', 0, 60);
$val = $mem->get('key3');
echo "Get key3 value:".$val."<br/>";

//保存数组数据
$arr = array('aa','bb','cc');
$mem->set('key2',$arr,0,60);
$val2 = $mem->get('key2');
echo "Get key2value:";
echo "<pre>";
print_r($val2);
echo "</pre>";

$mem->close();