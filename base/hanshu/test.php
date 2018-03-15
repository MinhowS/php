<?php
header('Content-type: text/html; charset=utf-8');/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2018/3/15
 * Time: 17:18
 */
echo '测试一下注释<?php    ?>会不会产生什么影响';
echo '<br />';

?>
这是什么？<?php /*if (true) {
    echo 'good';
}else {
    echo 'bad';
} */?>答案
<?php
echo '<br />';
echo '如果注释<?php    ?>不会产生影响，相当于不会解析';
echo 'who say php is so easy?';
?>