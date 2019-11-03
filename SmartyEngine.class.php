<?php
/**
 * Extends Smarty for your purpouse
 */
class SmartyEngine extends Smarty {
    
    private $tplBase; 
    private $tplDir;
    private $page=0;

    public function __construct(){
        //global $_GLOBAL;
        global $_POST;
        global $_SESSION;

        $this->tplBase='smarty.tpl';
        $this->tplDir='/var/www/html/crud/includes/lib';
        parent::__construct();

        $this->left_delimiter = '[+';
        $this->right_delimiter = '+]';

        $this->setTemplateDir($this->tplDir.'/smarty/templates');
        $this->setCompileDir($this->tplDir.'/smarty/templates_c');
        $this->setCacheDir($this->tplDir.'/smarty/cache');
        $this->setConfigDir($this->tplDir.'/smarty/configs');


    }

    public function assignVars(){

    }

    public function assignVar(){
        $this->assign();
    }

};


?>