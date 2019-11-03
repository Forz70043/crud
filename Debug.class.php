<?php

class Debug {
    public $msg = "XXX debug: ";

    public function __constructor(){

    }

    public function getDefaultMsg(){
        return $this->msg;
    }

    public function stampMsg($msg=''){
        if(empty($msg)) error_log($this->getDefaultMsg());
        else error_log($msg);
    }
    /**
     * input: msg, vars
     */
    public function stamp($msg='',$vars)
    {
        if(empty($msg)) $msg=$this->getDefaultMsg();    
        if(is_array($vars)) error_log("$msg :".print_r($vars,true));
        else error_log("$msg: ".var_export($vars,true));
    }   

};