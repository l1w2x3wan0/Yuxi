<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  7:04
 * Use:
 */

namespace lib\db;


class Mysql implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysql_query($sql);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}