<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-27
 * Time: 下午2:38
 */
function tick_handler($string=''){
    echo $string."nihao";
}
declare(ticks=2){
    register_tick_function('tick_handler');
    $arr=array(1,2,3,4);
    foreach($arr as $value){
      echo "";
    }
}

?>