<?php

//use reference
//$colors = array('red',  'green','blue', 1);
//var_dump($colors);
//foreach ($colors as &$color) {
//    $color = strtoupper($color);
//}
////unset($color);
//foreach ($colors as $color) {
//    echo "Do you like $color?\n";
//}

//$nihao='nihao';
//echo "wohao,$nihao";

//Listing Files
//$handle = opendir('../../');
//while (false !== ($file = readdir($handle))) {
//    $files[] = $file;
//}
//closedir($handle);
//sort($files);
//print_r($files);

//class try1{
//    public function ma(){
//        $this->na();
//    }
//
//    private function na(){
//        echo 'nihao';
//    }
//
//}
//
//$class=new try1();
//$class->ma();



// An example callback function
//function my_callback_function() {
//    echo 'hello world!';
//}
//
//// An example callback method
//class MyClass {
//    static function myCallbackMethod() {
//        echo 'Hello World!';
//    }
//}
//
//// Type 1: Simple callback
//call_user_func('my_callback_function');
//
//// Type 2: Static class method call
//call_user_func(array('MyClass', 'myCallbackMethod'));
//
//// Type 3: Object method call
//$obj = new MyClass();
//call_user_func(array($obj, 'myCallbackMethod'));
//
//// Type 4: Static class method call (As of PHP 5.2.3)
//call_user_func('MyClass::myCallbackMethod');
//
//// Type 5: Relative static class method call (As of PHP 5.3.0)
//class A {
//    public static function who() {
//        echo "A\n";
//    }
//}
//
//class B extends A {
//    public static function who() {
//        echo "B\n";
//    }
//}
//
//call_user_func(array('B', 'parent::who')); // A

// create an object and a copy as well as a reference to the variable
//$a = new stdclass;
//$b = $a;
//$c = &$a;
//
//// Do something with the object
//$a->foo = 42;
//var_dump($a->foo);
//var_dump($b->foo);
//var_dump($c->foo);
//
//// Now change the variable itself
//$a = 42;
//var_dump($a);
//var_dump($b);
//var_dump($c);
var_dump((1=='0001'));
?>
