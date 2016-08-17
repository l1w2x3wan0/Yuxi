<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/10
 * Time: 17:31
 */

define("SQL_HOST", "127.0.0.1");
define("SQL_USER", "root");
define("SQL_PASS", "123456");
define("SQL_DB", "mysql");

class mydb
{
    public static $connection;

    public static function runSql($sql)
    {
        if (!self::$connection) {
            self::$connection = mysql_connect(SQL_HOST, SQL_USER, SQL_PASS);
            mysql_select_db(SQL_DB, self::$connection);
        }
        mysql_query($sql, self::$connection);
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        call_user_func_array();
    }
}

class sqlThread extends Thread
{
    private $config;

    public function __construct()
    {
        //$this->config = $config;
    }

    public function run()
    {
        $i = 1;
        echo "{$i} ...\n";
        if (!mydb::runSql('select * from `user` ')) {
            print("{$i} ...\n");
            echo "{$i} ...\n";
            if (!mydb::runSql('select * from `user`')) {
                print("{$i} ...\n");
                echo "{$i} ...\n";
                $i++;
                if ($i >= 100)
                    return 'ok';
            }
        }
    }
}


$thread = new sqlThread();
$thread->run();

