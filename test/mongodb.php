<?php
/**
 * Created by PhpStorm.
 * User: beyond_dream
 * Date: 2016/8/2 0002
 * Time: 17:53
 */

$m = new MongoClient();
$db = $m->test;
$collection = $db->runoob;
$document = array(
    "title" => "MongoDB",
    "description" => "database",
    "likes" => 100,
    "url" => "http://www.runoob.com/mongodb/",
    "by", "hello"
);
$collection->insert($document);
echo "OK";

exit;
















$m = new MongoClient();

$db = $m->mydb;

$collection = $db->col;

$document = array('title'=>'my title', 'author'=>'lwx');
$collection->insert($document);

$document = array('title'=>'other title', 'online'=> true);
$collection->insert($document);

$cursor =$collection->find();

foreach ($cursor as $item) {
    echo $item['title'] . "\n";
}