<?php
namespace Imooc;

abstract class EventGenerator
{
    private $observerObjs = [];
    function addObserver(Observer $observer)
    {
        $this->observerObjs[] = $observer;
    }

    function notity($var)
    {
        foreach($this->observerObjs as $obj) {
            $obj->update($var);
        }
    }
}