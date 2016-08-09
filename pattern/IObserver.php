<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  20:18
 * Use:
 */

namespace pattern;


interface IObserver
{
    public function update($event_info = null);
}