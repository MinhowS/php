<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/19
 * Time: 14:23
 */
echo '定义一个常量用define()函数';
echo '<br>';
define("GREET","这是php的常量",true);
function test(){
    echo Greet;//定义的变量在函数内也可以正常访问。
}
test();
