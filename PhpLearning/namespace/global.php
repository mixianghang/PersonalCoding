<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-17
 * Time: 下午5:49
 */
require_once('define1.php');
require_once('define.php');
const const1="global/const1\n";
function tryFunction(){
    echo 'global/tryFunction';
}
class Connection{
    public static function getString(){
        echo 'global/Connection/getString()';
    }
}

use qianqian as q;
use xianghang as x;
use qianqian\Connection as qc;
use xianghang\Connection as xc;

echo const1;
echo \qianqian\const1;
echo q\const1;
echo x\const1;

echo Connection::getString();
echo qc::getString();
echo xc::getString();

?>