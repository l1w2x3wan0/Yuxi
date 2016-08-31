<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  6:10
 * Use:
 */

namespace pattern;


use lib\db\Mysql;
use lib\db\Mysqli;
use lib\db\Pdo;

class SingleDatabase
{
    private static $_instance = null;
    public $db;
    private $config = array();

    private function __construct($config)
    {

        $this->init($config);
    }

    public static function getInstance($config)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self($config);
        }
        return self::$_instance;
    }

    private function __clone()
    {
        exit('could not clone');
    }

    public function init($config)
    {
        $this->config = $config;


        if ('mysql' == $this->config['store']) {
            $this->db = new Mysql();

        } elseif ('mysqli' == $this->config['store']) {
            $this->db = new Mysqli();

        } elseif ('pdo' == $this->config['store']) {
            $this->db = new Pdo();

        } else {
            exit('config is error');
        }

        $this->db->connect($this->config['host'], $this->config['user'], $this->config['passwd'], $this->config['dbname']);
        $this->db->query('set names '. $this->config['charset']);
    }
}