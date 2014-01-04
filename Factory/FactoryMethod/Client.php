<?php
/**
 * 工厂方法模式，代码模板
 * 模式意图 ：定义一个用于创建对象的接口，让子类决定实例化哪一个类。Factory Method使用一个类的实例化延迟到其子类。
 *
 * Date: 1/4/14
 * Time: 15:25
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Operation.php");
require_once("AddOperation.php");
require_once("SubOperation.php");
require_once("MulOperation.php");
require_once("OperationFactory.php");
require_once("AddOperationFactory.php");
require_once("SubOperationFactory.php");
require_once("MulOperationFactory.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $operationFactory = new AddOperationFactory();
        $operation = $operationFactory->createOperation();
        $operation->numberA = 14;
        $operation->numberB = 2014;
        echo "14 + 2014 = " . $operation->getResult() . "\n";

        $operationFactory = new SubOperationFactory();
        $operation = $operationFactory->createOperation();
        $operation->numberA = 33;
        $operation->numberB = 2012;
        echo "33 - 2012 = " . $operation->getResult() . "\n";

        $operationFactory = new MulOperationFactory();
        $operation = $operationFactory->createOperation();
        $operation->numberA = 66;
        $operation->numberB = 9;
        echo "9 * 66 = " . $operation->getResult() . "\n";
    }
}
Client::main();