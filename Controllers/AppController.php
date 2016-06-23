<?php

require CLASSES . 'ObjectFactoryService.php';
require CLASSES . 'Form/Form.php';
require CLASSES . 'View/View.php';

class AppController
{
    const USERS_TABLE = 'users';
    public $view;

    public function init(){
        $config = require 'Config/config,php';
        $pdo = ObjectFactoryService::getDb($config);
        $model = ObjectFactoryService::getModel($pdo);
        $form = new Form($model, $config['form']['register']);
        $form->generateFields();
        $this->view = new View();
        if(!$_POST){
            $this->view->set('form',$form);
            $this->view->render('register');
        }else{
            $form->setData($_POST);
            $form->validate();
            if($form->isValid){
                $action = $form->config['name'];
                $this->$action($model, $form->getData());
            }
        }
    }

    public function register($model, $data){
        $model->saveUser($data);
        $this->view->render('thanks');
    }
}