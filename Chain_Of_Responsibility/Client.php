<?php
/**
 * 职责链模式，代码模板
 * 将一个请求封装为一个对象，从而使用你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
 *
 * Date: 1/5/14
 * Time: 22:44
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Handler.php");
require_once("ConcreteHandlerZero.php");
require_once("ConcreteHandlerPositive.php");
require_once("ConcreteHandlerMinus.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $concreteHandlerMinus = new ConcreteHandlerMinus();
        $concreteHandlerZero = new ConcreteHandlerZero();
        $concreteHandlerPositive = new ConcreteHandlerPositive();

        $concreteHandlerMinus->setSuccessor($concreteHandlerZero);
        $concreteHandlerZero->setSuccessor($concreteHandlerPositive);

        $foo = array(9, 0, -8, 7);

        foreach ($foo as $number) {
            $concreteHandlerMinus->handleRequest($number);
        }
    }
}
Client::main();