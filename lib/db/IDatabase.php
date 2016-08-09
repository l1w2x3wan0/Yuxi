<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  7:00
 * Use:
 */

namespace lib\db;


interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();

}