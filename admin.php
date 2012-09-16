<?php
//echo 'hello';
//echo __FILE__;
define('THINK_PATH',dirname(__FILE__).'/ThinkPHP/');
define('APP_PATH',dirname(__FILE__).'/admin/');
define('APP_NAME','admin');

define('APP_DEBUG',1);   

//define('STRIP_RUNTIME_SPACE',false);



require THINK_PATH.'ThinkPHP.php';
//App::run();
?>
