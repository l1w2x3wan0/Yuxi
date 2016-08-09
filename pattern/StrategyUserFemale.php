<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  17:54
 * Use:
 */

namespace pattern;


class StrategyUserFemale implements IUserStrategy
{
    public function showAd()
    {
        echo "2014 看新款女装";
    }
    public function showCategory()
    {
        echo "女装";
    }

}