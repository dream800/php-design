<?php
namespace Imooc;

class Factory
{
    static public function createDatabase()
    {
        $db = new Database();
        Register::set('db1', $db);
        return $db;
    }
}