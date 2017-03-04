<?php
/**
 * User: beyond_dream
 * Date: 2016/8/10 0010  3:44
 * Use:  new fixed
 */

$arr = [];
for ($i = 1; $i < 4; $i++) {
    $arr[]['name'] = 'name_' . $i;
    $arr[]['age'] = $i * $i;
    $arr[]['num'] = $i * 2;
}

print_r($arr);
exit;

$str = 'lsd,';
echo $str2 = trim($str, ',');
echo $str;
echo $today = date('Y-m-d');
echo $yesterday = date('Y-m-d', strtotime("-1 day"));
echo $todayTime = strtotime($today);
echo $yesterdayTime = strtotime($yesterday);

echo date('Y-m-d H:i:s');
echo time() . PHP_EOL;
echo strtotime(date('Y-m-d')) . PHP_EOL;

exit;

phpinfo();

echo 'Hello World';
