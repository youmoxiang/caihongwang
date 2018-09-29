<?php
// 检测PHP环境
if (version_compare(PHP_VERSION, '5.4.0', '<'))
    die('require PHP > 5.4.0 !');
 if (! file_exists('./install.lock')) {
     header('location: ./install.php');
     exit();
 }
// [ 应用入口文件 ]
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';


