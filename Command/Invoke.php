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
 * 请求者（Invoker）角色：负责调用命令对象执行请求，相关的方法叫做行动方法。
 * Class Invoke
 */
class Invoke 
{
    private $_command;

    public function __construct(Command $command)
    {
        $this->_command = $command;
    }

    public function action()
    {
        $this->_command->execute();
    }
}