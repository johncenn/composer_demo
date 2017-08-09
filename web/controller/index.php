<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index{
    
    protected $view;
    //new出一个模板文件
    public function __construct(){
        $this->view = new View();
    }
    
    
    public function show(){
        return $this->view->make('index')->with('verson', '版本：1.0');
    }
    
    public function login(){
        dd($_SESSION);
        //return $this->view->make('login');
    }
    
    public function test_code(){
        
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->build();
        $builder->output();
    }
}









