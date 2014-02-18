<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-18
 * Time: 上午9:24
 */
//
//try {
//    throw new Exception('hello, exception');
//}catch (Exception $e){
//    echo $e->getMessage();
//}finally{
//    echo 'hello, finnaly';
//}

Class MyException extends Exception{
    private $msg='nihao';
    public function __construct($message){
        parent::__construct($message);
        $this->msg.=$message;
        $this->message=$this->msg;

    }


}

$myException=new MyException('wobuhao');
echo $myException->getMessage();