<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/19
 * Time: 14:23
 */
header('Content-type: text/html; charset=utf-8');
echo '定义一个常量用define()函数';
echo '<br>';
define("GREET","这是php的常量",true);//true表示对大小写不敏感
function test(){
    echo Greet;//定义的变量在函数内也可以正常访问。
}
test();//这是php的常量
