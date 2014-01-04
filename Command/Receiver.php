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
 * 接收者（Receiver）角色：负责具体实施和执行一个请求。任何一个类都可以成为接收者，实施和执行请求的方法叫做行动方法。
 * Class Receiver
 */
class Receiver 
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * 行动方法
     */
    public function action()
    {
        echo $this->_name . ' do action.' . "\n";
    }
} 