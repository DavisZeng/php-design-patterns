<?php
/**
 * 命令模式，代码模板
 * 将一个请求封装为一个对象，从而使用你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
 *
 * Date: 1/4/14
 * Time: 11:55
 * Author: zengdewu <dewuzeng@gmail.com>
 */

require_once("Command.php");
require_once("ConcreteCommand.php");
require_once("Invoke.php");
require_once("Receiver.php");

/**
 * 客户（Client）角色：创建了一个具体命令(ConcreteCommand)对象并确定其接收者。
 * Class Client
 */
class Client 
{
    public static function main()
    {
        $receiver = new Receiver('Richard');

        $command = new ConcreteCommand($receiver);

        $invoke = new Invoke($command);
        $invoke->action();
    }
}

Client::main();