<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/19
 * Time: 10:37
 */
echo 'var_dump() 会返回变量的数据类型和值';

echo '1.字符串';
$x = '5985';
var_dump($x);
echo "<br>";
echo '2.整数';
$x = 0;
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

echo '3.浮点数';
$x = 10.365;
var_dump($x);
$x = 2.4e3;
var_dump($x);
$x = 8E-5;
var_dump($x);
echo '4.布尔型';
$x = true;
var_dump($x);
echo '5.数组';
$person=array("man","woman");
var_dump($person);
echo '6.对象';
class Car {
    var $color;
    function Car($color="green"){
        $this->color=$color;
    }
    function what_color(){
        return $this->color;
    }
}

echo '单双引号的区别';
$name = '小明';

echo 'name is $name';//输出 name is $name
echo '<br>';
echo "name is $name";//输出 name is 小明
echo '<br>';


$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
// 结束需要独立一行且前后不能空格