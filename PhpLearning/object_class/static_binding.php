<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-13
 * Time: 下午4:18
 */


//class A {
//    private function foo() {
//        echo "success!\n";
//    }
//    public function test() {
//        $this->foo();
//        static::foo();
//    }
//}
//
//class B extends A {
//    /* foo() will be copied to B, hence its scope will still be A and
//     * the call be successful */
//}
//
//class C extends A {
//    protected function foo() {
//        /* original method is replaced; the scope of the new one is C */
//    }
//}
//
//$b = new B();
//$b->test();
//$c = new C();
//$c->test();   //fails

//class A {
//    public static function foo() {
//        static::who();
//    }
//
//    public static function who() {
//        echo __CLASS__."\n";
//    }
//}
//
//class B extends A {
//    public static function test() {
//        B::foo();
//        parent::foo();
//        self::foo();
//    }
//
//    public static function who() {
//        echo __CLASS__."\n";
//    }
//}
//class C extends B {
//    public static function who() {
//        echo __CLASS__."\n";
//    }
//}
//
//C::test();

class A {
    public $one = 1;

    public function show_one() {
        echo $this->one;
    }
}

$a = new A;
$s = serialize($a);
echo $s;

$a=unserialize($s);
echo $a->one;
?>