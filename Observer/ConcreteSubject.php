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
 * 具体主题角色
 * Class ConcreteSubject
 */
class ConcreteSubject implements Subject
{
    private $_observers = array();

    /**
     * 添加一个新的观察者
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->_observers[] = $observer;
    }

    /**
     * 删除一个已注册的观察者
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->_observers, true);
        if (false !== $key) {
            unset($this->_observers[$key]);
        }
    }

    /**
     * 通知所有已注册的观察者
     */
    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update();
        }
    }
} 