<?php
namespace core;
class View{
    //模板文件
    protected $file;
    //模板变量
    protected $vars = [];
    
    public function make($file){
        $this->file = 'view/'.$file.'.html';
        return $this;
    }
    
    public function with($name , $value){
        
        $this->vars[$name] = $value;
        return $this;
    }
    
    public function __toString(){
        extract($this->vars);//把变量放到内存中，这样在模板文件里就可以读出
        include $this->file;
        return '';
    }
}








