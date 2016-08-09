<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  20:33
 * Use:
 */

namespace pattern;


class ObserverSms implements IObserver
{
    public function update($event_info = null)
    {
        echo "register send SMS\n";
    }
}