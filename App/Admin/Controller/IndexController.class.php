<?php
namespace Admin\Controller;
use Admin\Controller\CommonController;

class IndexController extends CommonController {
    public function index(){
    	header("Content-Type:text/html;charset='utf8'");
    	$mysql= M()->query("select VERSION() as version");
    	$mysql=$mysql[0]['version'];
    	$mysql=empty($mysql)?L('UNKNOWN'):$mysql;
    	$info = array(
    			L('OPERATING_SYSTEM') => PHP_OS,//php版本
    			L('OPERATING_ENVIRONMENT') => $_SERVER["SERVER_SOFTWARE"],//服务器信息
    			L('MYSQL_VERSION') =>$mysql,//数据库版本
    			L('PROGRAM_VERSION') =>  "TPCMS &nbsp;&nbsp;&nbsp; [<a href='http://www.tpcms.cms' target='_blank'>TpCMS</a>]",//系统版本信息
    			L('UPLOAD_MAX_FILESIZE') => ini_get('upload_max_filesize'),//phpini文件上传大小
    			L('MAX_EXECUTION_TIME') => ini_get('max_execution_time') . "s",//最大时间
    			L('DISK_FREE_SPACE') => round((@disk_free_space(".") / (1024 * 1024)), 2) . 'M',

    		);
    	$this->assign('infos',$info);
       
     	$this->display();
    }
}