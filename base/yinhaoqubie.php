<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/21
 * Time: 11:02
 */
header('Content-type: text/html; charset=utf-8');
//引号的区别

//声明变量$shouji
$shouji = '为了苹果手机去卖肾';
//在的双引号中放$shouji，然后echo一下，是什么效果呢

$str = "{$shouji}会不会显示呢";
echo $str;
echo "<br>";

$str1 = "$shouji 会不会显示呢";
echo $str1;
echo '<br>';


$php = 'php中文网';
$str2 = "$php!aaaa";
//你会发现输出$str2，页面中显示  php中文网!aaaa
echo $str2;
echo '<br>';
$string = "每天来PHP中文网\n给梦想\t一个机会";
echo $string;
echo '<br>';
echo '转义字符\\的使用';
$beizi = "大多多于绝数的人出生就是杯具，但是\"我们在不断的让人生变为喜剧";
echo '<br>';
$legend = '猛虎';
$NoAlike = "心有'$legend',细嗅蔷薇";
echo $NoAlike;

$name="runoob";
$a= <<<EOF
    "abc"\n$name
    "123'
EOF;
// 结束需要独立一行且前后不能空格
echo $a;