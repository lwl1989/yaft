<?php

class IndexController extends Yaf_Controller_Abstract
{
//    public $actions = array(
//        /** now dummyAction is defined in a separate file */
//        "dummy" => "actions/Dummy_action.php",
//    );

    /* action method may have arguments */
    public function indexAction() {
        var_dump('dasfsdgfhjhgrasfgdhhgtsgdhfgs');
        //var_dump($_GET['name']);
        //var_dump($name);$name, $id
        //var_dump($this->getRequest()->getParams("name"));
        //assert($name == $this->getRequest()->getParam("name"));
        //assert($id   == $this->_request->getParam("id"));
    }

    public function updateAction() {
        echo json_encode([
            'a' =>  'bbb'
        ]);
//        var_dump($this->getModuleName());exit();
//        $this->display('update', [
//            'a' =>  'bbbbbb'
//        ]);
//        $conf = Yaf_Application::app()->getConfig();
//        var_dump($conf);
//        $view = $this->getView();
//        $view->assign('a','bbb');
//        $view->display($this->getViewPath().'/index/update.html');
    }

}