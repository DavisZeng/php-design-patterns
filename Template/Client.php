<?php
/**
 *模板模式，代码模板
 * 模式意图 ：定义一个操作中的算法的骨架，而将一些步骤延迟到子类中。
 * Template Method 使得子类可以在不改变一个算法的结构的情况下重定义该算法的某些特定的步骤
 *
 * Date: 1/4/14
 * Time: 22:01
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("AbstractClass.php");
require_once("ConcreteClassA.php");
require_once("ConcreteClassB.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $concreteClassA = new ConcreteClassA();
        $concreteClassA->templateMethod();

        $concreteClassB = new ConcreteClassB();
        $concreteClassB->templateMethod();
    }
}
Client::main();