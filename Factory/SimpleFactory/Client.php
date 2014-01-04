<?php
/**
 * 简单工厂模式，代码模板
 * 模式意图 ：定义一个用于创建对象的接口。
 *
 * Date: 1/4/14
 * Time: 15:12
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Operation.php");
require_once("AddOperation.php");
require_once("SubOperation.php");
require_once("MulOperation.php");
require_once("OperationFactory.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $operator = OperationFactory::createOperation(OperationFactory::OPERATION_ADD);
        $operator->numberA = 29;
        $operator->numberB = 2013;
        echo "29 + 2013 = " . $operator->getResult() . "\n";

        $operator = OperationFactory::createOperation(OperationFactory::OPERATION_SUB);
        $operator->numberA = 300;
        $operator->numberB = 4499;
        echo "300 - 4499 = " . $operator->getResult() . "\n";

        $operator = OperationFactory::createOperation(OperationFactory::OPERATION_MUL);
        $operator->numberA = 13;
        $operator->numberB = 14;
        echo "13 * 14 = " . $operator->getResult() . "\n";
    }
}
Client::main();
