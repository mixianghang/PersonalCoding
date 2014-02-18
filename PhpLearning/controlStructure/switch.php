<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-28
 * Time: 上午8:54
 */

//float swith
$var_float=2.41;
switch($var_float){
    case 2.1:
        echo '2.1';
        break;
    case 2.3:
        echo '2.3';
        break;
    case "2.40":
        echo '2.4';
        break;
    default:
        echo 'default';
}