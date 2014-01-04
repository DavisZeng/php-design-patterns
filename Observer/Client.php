<?php
/**
 * 观察者模式，代码模板
 * 模式意图 ：定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。
 *
 * Date: 1/4/14
 * Time: 08:55
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Subject.php");
require_once("Observer.php");
require_once("ConcreteSubject.php");
require_once("ConcreteObserver.php");

class Client 
{
    public static function main()
    {
        $subject = new ConcreteSubject();

        //添加观察者A
        $observerA = new ConcreteObserver('Mark');
        $subject->attach($observerA);

        echo "The first notify.\n";
        $subject->notify();

        //添加观察者B
        $observerB = new ConcreteObserver('Zark');
        $subject->attach($observerB);

        echo "The second notify.\n";
        $subject->notify();

        //删除A 观察者
        $subject->detach($observerA);

        echo "The third notify.\n";
        $subject->notify();

    }
}
Client::main();