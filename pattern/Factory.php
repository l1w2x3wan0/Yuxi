<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  6:09
 * Use:
 */

namespace pattern;


class Factory
{
    public static function createDatabase()
    {
        $db = SingleDatabase::getInstance();
        Register::set('db1', $db);
        //return $db;
    }
}