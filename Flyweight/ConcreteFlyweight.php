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
 * 具体享元角色
 * Class ConcreteFlyweight
 */
class ConcreteFlyweight extends Flyweight
{
    //内部状态
    private $_intrinsicState = null;

    /**
     * init
     * @param $intrinsicState
     */
    public function __construct($intrinsicState)
    {
        $this->_intrinsicState = $intrinsicState;
    }

    public function operation($extrinsicState)
    {
        echo 'ConcreteFlyweight operation, Intrinsic State ' . $this->_intrinsicState .
            ' Extrinsic State ' . $extrinsicState . "\n";
    }
} 