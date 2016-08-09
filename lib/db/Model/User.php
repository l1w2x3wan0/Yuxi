<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  18:49
 * Use:
 */

namespace lib\db\Model;


class User
{
    public $uid;
    public $username;
    public $mobile;
    public $datetime;

    protected $db;

    function __construct($uid)
    {
        $res = $this->uid = $uid;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}