<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/29
 * Time: 11:33
 */
//环境变量主要用的有$_SERVER和$_ENV两个环境变量。不过$_ENV逐渐被PHP的新版本给废弃了
phpinfo();
echo $_SERVER["HTTP_HOST"];