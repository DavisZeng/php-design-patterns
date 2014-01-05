<?php
/**
 * 享元模式，代码模板
 * 意图:运用共享技术有效的支持大量细粒度的对象，享元模式变化的是对象的存储开销。
 *
 * Date: 1/5/14
 * Time: 11:47
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 享元工厂
 * Class FlyweightFactory
 */
class FlyweightFactory 
{
    private $_flyweights = array();

    public function getFlyweight($intrinsicState)
    {
        if (!isset($this->_flyweights[$intrinsicState])) {
            $this->_flyweights[$intrinsicState] = new ConcreteFlyweight($intrinsicState);
        }
        return $this->_flyweights[$intrinsicState];
    }
} 