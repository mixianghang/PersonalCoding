<?php
/**
 * Created by IntelliJ IDEA.
 * User: litb
 * Date: 14-2-18
 * Time: 下午6:06
 */
$msg="basic exception";
$code=1234;
$exception=new Exception($msg,$code);
echo $exception->getMessage();
echo $exception->getCode();
echo $exception->getFile();
echo $exception->getLine()."\n";
echo $exception->getPrevious();
echo var_dump($exception->getTrace());
