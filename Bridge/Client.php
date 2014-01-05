<?php
/**
 * 桥接模式，代码模板
 * 意图:将抽象部分与实现部分分离，使它们都可以独立地变化。
 *
 * Date: 1/5/14
 * Time: 14:02
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Implementor.php");
require_once("Abstraction.php");
require_once("RefinedAbstraction.php");
require_once("ConcreteImplementorA.php");
require_once("ConcreteImplementorB.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public function main()
    {
        $concreteImplementorA = new ConcreteImplementorA();
        $refinedAbstraction = new RefinedAbstraction($concreteImplementorA);
        $refinedAbstraction->operation();

        $concreteImplementorB = new ConcreteImplementorB();
        $refinedAbstraction = new RefinedAbstraction($concreteImplementorB);
        $refinedAbstraction->operation();
    }
}
Client::main();