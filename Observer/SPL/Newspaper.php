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
 * Subject,that who makes news
 */
class Newspaper implements \SplSubject
{
    private $_name;
    private $_observers = array();
    private $_content;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    //add observer
    public function attach(\SplObserver $observer)
    {
        $this->_observers[] = $observer;
    }

    //remove observer
    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->_observers, true);
        if (false !== $key) {
            unset($this->_observers[$key]);
        }
    }

    //set breakouts news
    public function breakOutNews($content)
    {
        $this->_content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return $this->_content . '(' . $this->_name . ')';
    }

    //notify observers(or some of them)
    public function notify()
    {
        foreach ($this->_observers as $observer)
        {
            $observer->update($this);
        }
    }

}