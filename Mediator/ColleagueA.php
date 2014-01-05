<?php
/**
 * 中介者模式 ： 代码模板
 * 模式意图：用一个中介对象来封装一系列的对象交互,使各对象不需要显式地相互引用从而使其耦合松散,而且可以独立地改变它们之间的交互。
 * Date: 1/5/14
 * Time: 22:13
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 具体同事类，每个具体同事只知道自己的行为，而不了解其它 同事类的情况，但它们却都认识中介者对象。
 * Class ColleagueA
 */
class ColleagueA extends Colleague
{
    public function send($message)
    {
        $this->mediator->send($message, $this);
    }

    public function notify($message)
    {
        echo "ColleagueA get the message:" . $message . "\n";
    }
} 