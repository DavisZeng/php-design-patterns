<?php
/**
 * 中介者模式 ： 代码模板
 * 模式意图：用一个中介对象来封装一系列的对象交互,使各对象不需要显式地相互引用从而使其耦合松散,而且可以独立地改变它们之间的交互。
 * Date: 1/5/14
 * Time: 22:13
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 具体中介者对象，实现抽象类的方法，它需要知道所有具体同事类，并从具体同事接收消息，向具体同事对象发出命令。
 * Class ConcreteMediator
 */
class ConcreteMediator implements Mediator
{
    public $colleagueA = null;
    public $colleagueB = null;

    public function send($message, Colleague $colleague)
    {
        if ($this->colleagueA === $colleague) {
            $this->colleagueB->notify($message);
        } elseif ($this->colleagueB === $colleague) {
            $this->colleagueA->notify($message);
        }
    }
} 