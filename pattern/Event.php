<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  20:25
 * Use:
 */

namespace pattern;


class Event extends EventGenerator
{
    public function trigger()
    {
        echo "event \n";
        $this->notify();
    }
}