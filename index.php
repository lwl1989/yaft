<?php
/**
 * Created by PhpStorm.
 * User: limars
 * Date: 2018/8/7
 * Time: 16:40
 */
defined('APPLICATION_PATH')                  // APPLICATION_PATH will be used in the ini config file
|| define('APPLICATION_PATH', __DIR__);         //__DIR__ was introduced after PHP 5.3


$application = new Yaf_Application(APPLICATION_PATH.'/config.ini');
Yaf_Dispatcher::getInstance()->autoRender(false);
$application->bootstrap()->run();
//echo "<pre>";
//var_dump($application->getConfig()->toArray());