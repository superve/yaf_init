<?php
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    private $_config;

    public function _initBootstrap(){
        $this->_config = Yaf_Application::app()->getConfig();
        #Yaf_Registry::set("spam",new System_Spam());
        
    }

    public function _initConfig(){
    	$config = new Yaf_Config_Ini(APPLICATION_COINFIG_FILE);
        Yaf_Registry::set("config", $config);
    }

    public function _initCommonFunctions(){
        // 加载定义助手函数
        Yaf_Loader::import(APPLICATION_PATH . '/application/common/functions.php');
    }

}
