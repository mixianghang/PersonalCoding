<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-17
 * Time: 下午5:30
 */
namespace qianqian;
require_once('global.php');
const const1="qianqian/const1\n";
function tryFunction(){
    echo "qianqian/tryFunction()\n";
}
class Connection{
    public static function getString(){
        echo "qianqian/Connection/getString()\n";
    }
}
//echo $nihao;
//echo nihao();
//echo \nihao::ni();
//echo $wo->wohao();

//echo __NAMESPACE__;
////echo __NAMESPACE__\const1;
//echo namespace\const1;
//
//echo constant(__NAMESPACE__.'\\'.'const1');
?>