<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-27
 * Time: 下午2:48
 */
$a=4;
function s(&$a){
    $a=2;
    $b=&$a;
    return $b;
}
$b=s($a);
echo $b;
$b=6;
echo $a;
echo $b;
?>
