<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-30
 * Time: 上午10:08
 */

//initialization
//class A{
//    public  $b=2;
//    public static  $c=3;
//    public function  test(){
//    echo $this->b;
//    echo self::$c;
//    }
//
//    public static function test1(){
//        echo self::$c;
//}
//}
//
//$a=new A();
//$a->test();
//A::test1();

//constant
class A{
    const Constant="welcome to this world!";

}

echo A::Constant;