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
 * 命令（Command）角色：声明了一个给所有具体命令类的抽象接口。这是一个抽象角色。
 * Interface Command
 */
interface Command
{
    /**
     * 执行方法
     * @return mixed
     */
    public function execute();
} 