<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-17
 * Time: 下午5:33
 */
require_once('define.php');
require_once('define1.php');
//use qianqian as a;
//class Connection{
//    public static function getString(){
//        echo 'global/Connection/getString()';
//    }
//}
echo \xianghang\Connection::getString();
echo \qianqian\Connection::getString();
?>