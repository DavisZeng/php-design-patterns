<?php
/**
 * 观察者模式，代码模板
 * 模式意图 ：定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。
 *
 * Date: 1/4/14
 * Time: 08:55
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 具体观察者
 * Class ConcreteObserver
 */
class ConcreteObserver implements Observer
{
    /**
     * @var 观察者名称
     */
    private $_name;

    /**
     * init
     * @param $name
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * 更新方法
     * @return mixed|void
     */
    public function update()
    {
        echo "Observer " . $this->_name . " has be notify.\r\n";
    }
} 