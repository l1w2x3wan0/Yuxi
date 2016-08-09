<?php
/**
 * User: beyond_dream
 * Date: 2016/8/5 0005  17:56
 * Use:
 */

namespace pattern;


class StrategyUserMale implements IUserStrategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo "IPhone \n";
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo "电子产品\n";
    }
}