<?php
/**
 * Created by PhpStorm.
 * User: limars
 * Date: 2018/8/7
 * Time: 16:58
 */

//echo "404";

class ErrorController extends Yaf_Controller_Abstract{
    public function errorAction()
    {
        echo "<pre>";
        var_dump($this);
    }
}