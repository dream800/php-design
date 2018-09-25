<?php

define('BASEDIR', __DIR__);

require BASEDIR.'/Imooc/Loader.php';
spl_autoload_register('\\Imooc\\Loader::autoload');


//$db = Imooc\Factory::createDatabase();
//var_dump($db);
//$db = Imooc\Register::get('db1');
//var_dump($db);
//
//Imooc\Object::test();
//App\Controller\Home\Index::test();

//class Page
//{
//    protected $strategy = null;
//
//    function __construct(\Imooc\Strategy $object)
//    {
//        $this->strategy = $object;
//    }
//
//    public function index()
//    {
//        $this->strategy->showAd();
//    }
//}
//(new Page(new \Imooc\Strategy\Female()))->index();

class Event extends \Imooc\EventGenerator
{
    public function index($var)
    {
        $this->notity($var);
    }
}

class Observer1 implements \Imooc\Observer
{
    public function update($var)
    {
        // TODO: Implement update() method.
        echo $var + 1;
    }
}

class Observer2 implements \Imooc\Observer
{
    public function update($var)
    {
        // TODO: Implement update() method.
        echo $var + 2;
    }
}

$event = new Event();

$event->addObserver((new Observer1()));
$event->addObserver((new Observer2()));
$event->index(2);

