<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  20:15
 * Use:
 */

namespace pattern;


abstract class EventGenerator
{
    private $observer = array();

    public function addObserver(IObserver $observer)
    {
        $this->observer[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update();
        }
    }
}