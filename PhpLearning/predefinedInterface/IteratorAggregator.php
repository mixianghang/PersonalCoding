<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-21
 * Time: 上午9:32
 */
Class MyIteratorAggregate implements IteratorAggregate{
    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     */
    public function getIterator()
    {
        // TODO: Implement getIterator() method.
        $arr=array(
            'key1'=>'nihao',
            'key2'=>'jiayou',
            'key3'=>'qianjin',
        );
        return new ArrayIterator($arr);
    }

}

$iterator=new MyIteratorAggregate;
foreach($iterator as $key=>$value){
    echo $key.":".$value."\n";
}