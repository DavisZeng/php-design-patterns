<?php
/**
 * 桥接模式，代码模板
 * 意图:将抽象部分与实现部分分离，使它们都可以独立地变化。
 *
 * Date: 1/5/14
 * Time: 14:02
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象部分
 * Class Abstraction
 */
Abstract class Abstraction
{
    protected $impl;

    public function __construct(Implementor $impl)
    {
        $this->impl = $impl;
    }

    public function operation()
    {
        $this->impl->operation();
    }
} 