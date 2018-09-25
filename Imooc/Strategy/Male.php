<?php
namespace Imooc\Strategy;

use Imooc\Strategy;

class Male implements Strategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo '男装广告';

    }

    public function showMsg()
    {
        // TODO: Implement showMsg() method.
        echo '男装信息';
    }
}
