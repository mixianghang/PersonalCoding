<?php
/**
 * Created by PhpStorm.
 * User: litb
 * Date: 14-1-30
 * Time: 上午9:27
 */

//$this
//class A{
//    public function testA(){
//        if(isset($this)){
//            echo '$this is defined, class is ';
//            echo get_class($this);
//            echo "\n";
//        }
//        else{
//            echo "this is undefied";
//        }
//    }
//}
//
//class B{
//    public function testB(){
//        A::testA();
//    }
//}
//
//class C{
//    public function testC(){
//        B::testB();
//    }
//}
//
//$a=new A();
//$b=new B();
//$c=new C();
//$a->testA();
//$b->testB();
//$c->testC();

//class initialization
class C{
    public function testC($string){
        echo $string;
    }
}

//method_one
$c1=new C();
$c1->testC("initialized through new+ class name\n");

//method_two
$class_name='C';
$c2=new $class_name();
$c2->testC("initialized through new + varialble class name\n");

//method 3
$c3=new $c2;
if($c3!==$c2){
    echo ' $c3 is a new object';
}

//echo the qualified name of a class
echo C::class;
?>

