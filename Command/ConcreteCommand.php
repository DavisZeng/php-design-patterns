<?php
/**
 * 命令模式，代码模板
 * 将一个请求封装为一个对象，从而使用你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
 *
 * Date: 1/4/14
 * Time: 11:55
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 具体命令（ConcreteCommand）角色：定义一个接受者和行为之间的弱耦合；实现Execute()方法，
 * 负责调用接收考的相应操作。Execute()方法通常叫做执行方法。
 * Class ConcreteCommand
 */
class ConcreteCommand implements Command
{
    private $_receiver;

    public function __construct(Receiver $receiver)
    {
        $this->_receiver = $receiver;
    }

    /**
     * 执行方法
     * @return mixed|void
     */
    public function execute()
    {
        $this->_receiver->action();
    }
} 