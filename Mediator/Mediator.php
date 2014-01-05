<?php
/**
 * 中介者模式 ： 代码模板
 * 模式意图：用一个中介对象来封装一系列的对象交互,使各对象不需要显式地相互引用从而使其耦合松散,而且可以独立地改变它们之间的交互。
 * Date: 1/5/14
 * Time: 22:13
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象中介者，定义了同事对象到中介者对象的接口。
 * Interface Mediator
 */
interface Mediator
{
    public function send($message, Colleague $colleage);
} 