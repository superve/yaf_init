<?php 
/**
 * Index控制器
 */
class IndexController extends Yaf_Controller_Abstract
{
    public function init()
    {
        echo 'init call...';
    }


    public function indexAction()
    {
        dd($this->getRequest()->getParams());
        $title = 'hi yaf!!!';
       $this->getView()->assign('title', $title);
    	// $this->getResponse()->setRedirect('http://www.baidu.com');
    }

    public function testAction()
    {
        $dbConfig = new Yaf_Config_Ini(APPLICATION_PATH . '/conf/db.ini', 'development');
        $db = new Db_MedooModel($dbConfig->database->toArray());


        $sql = 'select * from sh_admin';
        dd($db->query($sql)->fetchAll());
        $data = $db->select("admin", "*", [
            // 偏移量
            "LIMIT" => [0, 2],
            // 排序
            "ORDER" => [
                'username' => 'DESC',       
            ]
        ]);
        dd($db->log());
        dd($data);
        return false;
    }


}

 ?>