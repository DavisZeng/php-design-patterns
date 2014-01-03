<?php
/**
 * 代理模式，代码模板
 * 模式意图 ：为其他对象提供一种代理以控制对这个对象的访问。
 *
 * Date: 1/3/14
 * Time: 22:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * Class ProxySubject 代理主题角色
 */
class ProxySubject extends Subject
{
    private $_realSubject = null;

    public function __construct()
    {
    }

    private function _beforeAction()
    {
        echo "Before action in ProxySubject.\r\n";
        return true;
    }

    public function action()
    {
        if (true === $this->_beforeAction()) {
            if (null === $this->_realSubject) {
                $this->_realSubject = new RealSubject();
            }
            $this->_realSubject->action();
            $this->_afterAction();
        }
    }

    private function _afterAction()
    {
        echo "After action in ProxySubject.\r\n";
    }
}