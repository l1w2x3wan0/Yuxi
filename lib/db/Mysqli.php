<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  6:58
 * Use:
 */

namespace lib\db;


class Mysqli implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $passwd, $dbname)
    {
        $this->conn = new \mysqli($host, $user, $passwd, $dbname);
    }

    public function query($sql)
    {
        mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        mysqli_close();
    }

}