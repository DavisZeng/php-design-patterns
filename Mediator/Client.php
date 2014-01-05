<?php
 /**
 * 中介者模式 ： 代码模板
 * 模式意图：用一个中介对象来封装一系列的对象交互,使各对象不需要显式地相互引用从而使其耦合松散,而且可以独立地改变它们之间的交互。
 * Date: 1/5/14
 * Time: 22:13
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Mediator.php");
require_once("ConcreteMediator.php");
require_once("Colleague.php");
require_once("ColleagueA.php");
require_once("ColleagueB.php");

/**
 * 客户端
 * Class Client
 */
class Client 
{
    public static function main()
    {
        //声明具体中介者
        $concreteMediator = new ConcreteMediator();

        //让同事类认识具体中介者
        $colleagueA = new ColleagueA($concreteMediator);
        $colleagueB = new ColleagueB($concreteMediator);

        //让中介者记录下所有同事类对象
        $concreteMediator->colleagueA = $colleagueA;
        $concreteMediator->colleagueB = $colleagueB;

        //同事之间可以通过中介者相互发送消息
        $colleagueA->send("Hey, boy.");
        $colleagueB->send("F.U.C.K");
    }
}
Client::main();