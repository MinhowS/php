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
define("GREET","这是php的常量",true);//true表示对大小写不敏感，常量名可以小写，但是通常大写；常量名可以不加引号，但是通常加上引号
function test(){
    echo Greet;//定义的变量在函数内也可以正常访问。
}
test();//这是php的常量

//在字符串中调用常量的时候，必须在引号外面
define('MY_NAME','MinhowS');
echo '<br>';
echo MY_NAME;
//下面是错误的调用格式
echo '<br>';
echo '我的名字是MY_NAME';
//正确的调用方式该这么写
echo '<br>';
echo '我的名字是'.MY_NAME;
