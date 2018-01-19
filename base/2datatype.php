<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/19
 * Time: 10:37
 */
echo 'var_dump() 会返回变量的数据类型和值';
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
