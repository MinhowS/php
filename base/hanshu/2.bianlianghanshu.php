<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/30
 * Time: 14:00
 */
header('Content-type: text/html; charset=utf-8');
echo '可变函数仅仅是可变变量的一个变种、变种表达<br />';
function demo(){
    echo '天王盖地虎';
}
function test(){
    echo '小鸡炖蘑菇';
}
$fn1 = 'test';
$fn2 = 'demo';
$fn1();
echo '<br />';
$fn2();