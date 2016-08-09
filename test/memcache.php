<?php
/**
 * User: beyond_dream
 * Date: 2016/8/10 0010  2:15
 * Use:
 */
$mem = new Memcache;
$mem->connect('localhost',11211);

//保存数据
$mem->set('key1','this is first value',0,60);
$val = $mem->get('key1');
echo "Get key1 value:".$val."<br/>";

//替换数据
$mem->replace('key1','this is replace value',0,60);
$val = $mem->get('key1');
echo "Get key1 value:".$val."<br/>";

//保存数组数据
$arr = array('aa','bb','cc');
$mem->set('key2',$arr,0,60);
$val2 = $mem->get('key2');
echo "Get key2 value:";
echo "<pre>";
print_r($val2);

$mem->close();
