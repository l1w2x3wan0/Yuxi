<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  6:58
 * Use:
 */

namespace lib\db;


class Pdo implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }

}