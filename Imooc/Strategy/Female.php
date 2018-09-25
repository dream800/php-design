<?php
namespace Imooc\Strategy;

use Imooc\Strategy;

class Female implements Strategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo '女装广告';
    }

    public function showMsg()
    {
        // TODO: Implement showMsg() method.
        echo '女装信息';
    }
}