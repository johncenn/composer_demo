<?php
namespace core;
class Bootstrap{
    public static function run(){
        session_start();
        self::parseUrl();
        //echo "Bootstrap";
    }
    
    //分享url生成控制器方法常量
    public static function parseUrl(){
        
        if( isset($_GET['s']) ){
            $info = explode('/',$_GET['s']);
            $class = "\web\controller\\".ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = "\web\controller\Index";
            $action = "show";
        }
        
        echo (new $class)->$action();
        
    }
}
