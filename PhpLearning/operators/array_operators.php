<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-27
 * Time: 上午10:53
 */
$a = array("apple", 2);
$b = array("0" => "apple",1 => "2");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>