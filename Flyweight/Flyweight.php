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
 * 抽象享元角色
 * Class Flyweight
 */
Abstract class Flyweight
{
    /**
     * 示意性方法
     * @param $extrinsicState 外部状态
     * @return mixed
     */
    public abstract function operation($extrinsicState);
} 