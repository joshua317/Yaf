<?php
define('APP_ROOT', realpath(dirname(__FILE__)));
define("APP_PATH", APP_ROOT . '/application');
define("APP_CONFIG", APP_ROOT.'/conf');

//定义全局library
ini_set('yaf.library', APP_PATH.'/library');

//第二个参数用来区分开发环境、测试环境、生产环境配置 对应config中内容
//实例化Bootstrap, 依次调用Bootstrap中所有_init开头的方法
$app  = new Yaf_Application( APP_CONFIG."/app.ini",'common');
$app->bootstrap()->run();