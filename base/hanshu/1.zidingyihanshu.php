<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/30
 * Time: 11:00
 */
header('Content-type: text/html; charset=utf-8');
function php_fun(){
    echo '函数是条狗。';
}
php_fun();
php_fun();
php_fun();
/*函数名不区分大小写。*/
function Demo(){
    echo '如果是写代码的男人，我们需要更加承担来自家庭的责任<br />';
}
demo();
Demo();
DEMO();
/*函数的参数有默认值的话，参数可以不填，代码也不会报错*/
function test($arg = 10){
    echo $arg;
}
test();
echo '<br />';
test(88);
echo '<br />';
echo '函数的参数可以写多个';
echo '<br />';
function test1($a,$b,$c=30){
    echo $a + $b + $c;
}
test1(1,23,4);




