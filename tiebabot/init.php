<?php
error_reporting(E_ALL^E_WARNING^E_NOTICE);
define('IS_GIUEM', true);
define('SYSTEM_ROOT', dirname(__FILE__).'/');
date_default_timezone_set('PRC');
require SYSTEM_ROOT.'/lib/class.tieba.php';
require SYSTEM_ROOT.'/lib/commom.php';
require SYSTEM_ROOT.'/lib/ui.php';
require SYSTEM_ROOT.'/lib/api.php';
require SYSTEM_ROOT.'/lib/func.mysqli.php';
/*
if (!file_get_contents(SYSTEM_ROOT.'config.php')) {
    // 检测是否已安装
    header('Location: ./install/');
}
*/
/*PHP END*/