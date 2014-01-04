<?php
/**
 * 策略模式，代码模板
 * 模式意图 ：定义一系列的算法，把它们一个个封装起来，并且使它们可相互替换。策略模式可以使算法可独立于使用它的客户而变化。
 *
 * Date: 1/4/14
 * Time: 20:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Strategy.php");
require_once("ConcreteStrategyA.php");
require_once("ConcreteStrategyB.php");
require_once("ConcreteStrategyC.php");
require_once("Context.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $strateA = new ConcreteStrategyA();
        $context = new Context($strateA);
        $context->contextInterface();

        $strateB = new ConcreteStrategyB();
        $context = new Context($strateB);
        $context->contextInterface();

        $strateC = new ConcreteStrategyC();
        $context = new Context($strateC);
        $context->contextInterface();
    }
}
Client::main();