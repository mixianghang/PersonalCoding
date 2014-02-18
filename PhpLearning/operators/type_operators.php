<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-27
 * Time: 上午10:59
 */
Class A implements C{

}
Class B{

}
 interface C{

 }
define('NMAE','A');
$object_a=new A();
$object_b=new A();
var_dump($object_a instanceof B);
var_dump($object_a instanceof $object_b);
var_dump($object_a instanceof C);
$class_name='A';
var_dump($object_a instanceof $class_name);
var_dump($object_a instanceof NMAE);
