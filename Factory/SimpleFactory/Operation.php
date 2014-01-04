<?php
/**
 * 简单工厂模式，代码模板
 * 模式意图 ：定义一个用于创建对象的接口。
 *
 * Date: 1/4/14
 * Time: 15:12
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 抽象产品角色--计算操作类
 * Class Operation
 */
Abstract class Operation
{
    public $numberA;
    public $numberB;

    public abstract function getResult();
} 