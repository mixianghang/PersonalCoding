<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-27
 * Time: 上午11:51
 */

//test scope and reference through parameters of functions
//class g{
//    public $a=2;
//}
//$arr=array(1,2,3,4);
//$object=new g();
//function m(&$arr,$object){
//    $object->a=4;
//    foreach($arr as &$value){
//        $value*=2;
//    }
//    while(list(,$value)=each($arr)){
//        echo $value;
//    }
//}
//m($arr,$object);
//var_dump($arr);
//var_dump($object);

//$arr=array(1,2,3,4);
//while(list($key,$value)=each($arr)){
//    echo $key;
//}

//unpack nested array into list
//$arr=array(array(0,1,2),array(3,4,5));
//$arr1=array([1,2,3],[4,5,6]);
//foreach($arr1 as list($a,$b)){
//    echo $a.$b;
//}

$a=2;
if($a==2)
    echo 1;
else if($a==2)
    echo 2;
?>