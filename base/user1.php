<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/1/29
 * Time: 11:10
 */
//PHP的外部变量就是PHP在使用过程中规定好的一些变量。这个变量的规定是这样规定的，就这样使用。
//$_POST 也是一个外部变量，他的主要作用是将得到的post传值的数据。
//$_GET后面加上中括号，将username作为字符串放在中括号里面，就得到了表单里面的<input type="text" name="username" /> 的值
$u = $_POST['username'];
echo $u.'<br />';

//$_POST['pwd'] 得到表单<input type="text" name="username" /> 的值
$passwd = $_POST['pwd'];
echo $passwd.'<br />';