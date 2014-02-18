<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-18
 * Time: 上午10:19
 */
//function xrange($start, $limit, $step = 1) {
//    if ($start < $limit) {
//        if ($step <= 0) {
//            throw new LogicException('Step must be +ve');
//        }
//
//        for ($i = $start; $i <= $limit; $i += $step) {
//            yield $i;
//        }
//    } else {
//        if ($step >= 0) {
//            throw new LogicException('Step must be -ve');
//        }
//
//        for ($i = $start; $i >= $limit; $i += $step) {
//            yield $i;
//        }
//    }
//}
//
///*
// * Note that both range() and xrange() result in the same
// * output below.
// */
//
//echo 'Single digit odd numbers from range():  ';
//foreach (range(1, 9, 2) as $number) {
//    echo "$number ";
//}
//echo "\n";
//
//echo 'Single digit odd numbers from xrange(): ';
//foreach (xrange(1, 9, 2) as $number) {
//    echo "$number ";
//}

//function &getG(){
//    $value=4;
//    while($value>0){
//        yield $value;
//    }
//}
//
//foreach(getG() as &$value){
//    echo $value--;
//}
//
//function &try1(){
//    static $var=12;
//    echo $var;
//    return $var;
//}
//
//$value=&try1();
//$value=10;
//try1();
//echo $value;

/* Assignment of scalar variables */
$a = 1;
$b =& $a;
$c = $b;
$c = 7; //$c is not a reference; no change to $a or $b

/* Assignment of array variables */
$arr = array(1);
$a =& $arr[0];/**//**/ //$a and $arr[0] are in the same reference set
$arr2 = $arr; //not an assignment-by-reference!
$arr2[0]++;
echo $arr[0];
echo $a;
?>