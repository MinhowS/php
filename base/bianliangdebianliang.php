<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/29
 * Time: 10:23
 */
header('Content-type: text/html; charset=utf-8');
//变量的变量也称为可变变量
//可变变量其实就是在已经的声明的变量前面在加上变量符
$first_name = 'minhow'; //定义了一个变量first_name,将$first_name这个变量的值设为字符串minhow
$minhow = '明浩';//定义了一个变量$minhow，将他的值设置为明浩
echo $$first_name;//$$first_name就是可变变量，即在已声明的变量$first_name前又加上了一个变量符