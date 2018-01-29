<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/29
 * Time: 19:09
 */
header('Content-type: text/html; charset=utf-8');
$a = 5;
$b = $a;
$b = 6;
echo $a.'<br>';
echo $b.'<br>';
echo '下面的是变量引用,加上了一个&,理解成传址赋值--2018.1.29'.'<br />';
$c = 5;
$d = &$c;
$d = 6;
echo $c.'<br />';
echo $d.'<br />';