<?php
namespace Imooc;

class Register
{
    static private $objectArr;

    static public function set($alias, $object)
    {
        self::$objectArr[$alias] = $object;
    }

    static public function _unset($alias)
    {
        unset(self::$objectArr[$alias]);
    }

    static public function get($alias)
    {
        return self::$objectArr[$alias];
    }
}