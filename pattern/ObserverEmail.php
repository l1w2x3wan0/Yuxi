<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  20:29
 * Use:
 */

namespace pattern;


class ObserverEmail implements IObserver
{
    function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo "register send email\n";
    }
}