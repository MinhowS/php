<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/21
 * Time: 16:01
 */
header('Content-type: text/html; charset=utf-8');
echo '产生null的三种情况：';
echo '第一种：通过变量赋值明确指定变量为null';
echo '<br>';
echo '$n = null;var_dump($n);';
$n = null;
var_dump($n);
echo '第二种：一个变量没有赋值,会报错';
echo '<br>';
echo '第三种：使用函数unset()将变量销毁,还是会出现错误信息';
echo '<br>';
echo '$xiaohui';
$xiaohui='销毁';
unset($xiaohui);
var_dump($xiaohui);