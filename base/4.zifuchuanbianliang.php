<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/19
 * Time: 14:46
 */
echo '字符串的拼接呢';
$txt1 = 'Hello world!';
$txt2 = 'What a nice day！';
echo $txt1.' '.$txt2;
echo '<br>';
echo 'strlen()函数返回字符串的长度';
echo strlen($txt1);
echo '<br>';
echo 'strpos()函数返回指定字符或者字符串出现的位置，没有返回false';
echo strpos('hello world','world');